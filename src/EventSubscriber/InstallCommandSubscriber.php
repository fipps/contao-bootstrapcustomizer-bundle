<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\EventSubscriber;


use Contao\CoreBundle\Command\SymlinksCommand;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\Database;
use Contao\Database\Result;
use Contao\CoreBundle\Util\SymlinkUtil;
use Symfony\Component\Console\ConsoleEvents;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpKernel\KernelInterface;

class InstallCommandSubscriber implements EventSubscriberInterface
{
    /**
     * @var string
     */
    private $rootDir;

    /**
     * @var Filesystem
     */
    private $fs;

    /**
     * InstallCommandSubscriber constructor.
     *
     * @param KernelInterface $kernel
     * @param ContaoFramework $framework
     */
    public function __construct(KernelInterface $kernel, ContaoFramework $framework)
    {
        $this->rootDir = dirname($kernel->getRootDir());
        $this->fs      = new Filesystem();
        $framework->initialize();
    }


    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            ConsoleEvents::TERMINATE => [
                [
                    'symlinkAssetsBootstrap',
                ],
                [
                    'convertDatabaseEntries',
                ],
            ],
        ];
    }


    /**
     * Sets a symbolic link from assets/bootrap scss- and js-files to vendor/twbs/bootstrap
     *
     * @param ConsoleTerminateEvent $event
     */
    public function symlinkAssetsBootstrap(ConsoleTerminateEvent $event)
    {
        $output   = $event->getOutput();
        $command  = $event->getCommand();
        $exitCode = $event->getExitCode();

        if (!($command instanceof SymlinksCommand) || $exitCode > 0) {
            return;
        }

        $this->fs->mkdir($this->rootDir.'/assets/bootstrap');
        SymlinkUtil::symlink('vendor/twbs/bootstrap/dist/js', 'assets/bootstrap/js', $this->rootDir);
        SymlinkUtil::symlink('vendor/twbs/bootstrap/scss', 'assets/bootstrap/scss', $this->rootDir);

        $output->writeln('Symlinked assets/bootstrap scss and js files to twbs/bootstrap');
    }

    public function convertDatabaseEntries(ConsoleTerminateEvent $event)
    {

        $output   = $event->getOutput();
        $command  = $event->getCommand();
        $exitCode = $event->getExitCode();
        $database = Database::getInstance();


        if (!($command instanceof SymlinksCommand) || $exitCode > 0) {
            return;
        }

        if ($database->tableExists('tl_bs_theme') && $database->fieldExists('primary', 'tl_bs_theme')) {
            $output->writeln('Start Converting DB Entries');

            $themeAttributes = ['primary', 'secondary', 'tertiary', 'info', 'success', 'warning', 'danger', 'light', 'dark'];
            $joinedThemeAttributes = empty($themeAttributes)?"":"`".implode('`, `', $themeAttributes)."`";
            $grayAttributes = ['gray100', 'gray200', 'gray300', 'gray400', 'gray500', 'gray600', 'gray700', 'gray800', 'gray900'];
            $joinedGrayAttributes = empty($grayAttributes)?"":"`".implode('`, `', $grayAttributes)."`";
            $sql = sprintf('SELECT `id`, `title`, %s, %s FROM  `tl_bs_theme`', $joinedThemeAttributes, $joinedGrayAttributes);
            $themeCollection = $database->prepare($sql)->query();

            if (!$database->fieldExists('themeColors', 'tl_bs_theme')) {
                $sql = 'ALTER TABLE `tl_bs_theme` ADD `themeColors` BLOB NULL';
                $database->execute($sql);
            }

            if (!$database->fieldExists('grayColors', 'tl_bs_theme')) {
                $sql = 'ALTER TABLE `tl_bs_theme` ADD `grayColors` BLOB NULL';
                $database->execute($sql);
            }

            $database->beginTransaction();
            while ($themeCollection->next()) {
                $output->writeln('Converting Entry "'.$themeCollection->title.'"');

                $themeColors = $this->getColors($themeAttributes, $themeCollection);
                $grayColors = $this->getColors($grayAttributes, $themeCollection);

                $sql = sprintf("UPDATE `tl_bs_theme` SET `themeColors` = '%s', `grayColors` = '%s' WHERE `id` = %s", serialize($themeColors), serialize($grayColors), $themeCollection->id);
                $database->execute($sql);

            }
            $database->commitTransaction();
            $output->writeln('Finished Converting DB Entries');
        }
    }

    /**
     * @param array  $attributes
     * @param Result $themeResult
     * @return array
     */
    private function getColors(array $attributes, Result $themeResult) {
        $colors = array();
        foreach ($attributes as $attribute) {
            $name = str_replace('gray', 'gray-', $attribute);

            $colors[] = array(
                'name'  => $name,
                'color' => $themeResult->$attribute,
            );
        }
        return $colors;
    }

}