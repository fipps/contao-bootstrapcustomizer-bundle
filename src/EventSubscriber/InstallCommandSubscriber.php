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

    /**
     * @param ConsoleTerminateEvent $event
     * @throws \Exception
     */
    public function convertDatabaseEntries(ConsoleTerminateEvent $event)
    {

        $output   = $event->getOutput();
        $command  = $event->getCommand();
        $exitCode = $event->getExitCode();
        $database = Database::getInstance();


        if (!($command instanceof SymlinksCommand) || $exitCode > 0) {
            return;
        }

        try {
            if ($database->tableExists('tl_bs_theme') && $database->fieldExists('primary', 'tl_bs_theme')) {
                $output->writeln('Start Converting DB Entries for Colors');

                $defaultThemeColors = array(
                    array(
                        'name'  => "primary",
                        'value' => '$blue',
                    ),
                    array(
                        'name'  => "secondary",
                        'value' => '$gray-600',
                    ),
                    array(
                        'name'  => "info",
                        'value' => '$cyan',
                    ),
                    array(
                        'name'  => "success",
                        'value' => '$green',
                    ),
                    array(
                        'name'  => "warning",
                        'value' => '$yellow',
                    ),
                    array(
                        'name'  => "danger",
                        'value' => '$red',
                    ),
                    array(
                        'name'  => "light",
                        'value' => '$gray-100',
                    ),
                    array(
                        'name'  => "dark",
                        'value' => '$gray-800',
                    ),
                );
                $defaultGrayColors  = array(
                    array(
                        'name'  => "gray-100",
                        'value' => '#f8f9fa',
                    ),
                    array(
                        'name'  => "gray-200",
                        'value' => '#e9ecef',
                    ),
                    array(
                        'name'  => "gray-300",
                        'value' => '#dee2e6',
                    ),
                    array(
                        'name'  => "gray-400",
                        'value' => '#ced4da',
                    ),
                    array(
                        'name'  => "gray-500",
                        'value' => '#adb5bd',
                    ),
                    array(
                        'name'  => "gray-600",
                        'value' => '#6c757d',
                    ),
                    array(
                        'name'  => "gray-700",
                        'value' => '#495057',
                    ),
                    array(
                        'name'  => "gray-800",
                        'value' => '#343a40',
                    ),
                    array(
                        'name'  => "gray-900",
                        'value' => '#212529',
                    ),
                );

                $themeAttributes       = ['primary', 'secondary', 'tertiary', 'info', 'success', 'warning', 'danger', 'light', 'dark'];
                $joinedThemeAttributes = empty($themeAttributes) ? "" : "`".implode('`, `', $themeAttributes)."`";
                $grayAttributes        = ['gray100', 'gray200', 'gray300', 'gray400', 'gray500', 'gray600', 'gray700', 'gray800', 'gray900'];
                $joinedGrayAttributes  = empty($grayAttributes) ? "" : "`".implode('`, `', $grayAttributes)."`";
                $sql                   = sprintf('SELECT `id`, `title`, %s, %s FROM  `tl_bs_theme`', $joinedThemeAttributes, $joinedGrayAttributes);
                $themeCollection       = $database->prepare($sql)->query();

                if (!$database->fieldExists('themeColors', 'tl_bs_theme')) {
                    $sql = 'ALTER TABLE `tl_bs_theme` ADD `themeColors` BLOB NULL';
                    $database->execute($sql);
                }

                if (!$database->fieldExists('grayColors', 'tl_bs_theme')) {
                    $sql = 'ALTER TABLE `tl_bs_theme` ADD `grayColors` BLOB NULL';
                    $database->execute($sql);
                }

                $database->beginTransaction();

                // Convert old color theme settings
                while ($themeCollection->next()) {
                    $output->writeln('Converting Entry "'.$themeCollection->title.'"');
                    $themeColors = $this->getColors($themeAttributes, $themeCollection, $defaultThemeColors);
                    $grayColors  = $this->getColors($grayAttributes, $themeCollection, $defaultGrayColors);
                    $sql         = sprintf("UPDATE `tl_bs_theme` SET `themeColors` = '%s', `grayColors` = '%s' WHERE `id` = %s", serialize($themeColors), serialize($grayColors), $themeCollection->id);
                    $database->execute($sql);

                }

                // Add ideMenuWidths with defaults
                if (!$database->fieldExists('sideMenuWidths', 'tl_bs_theme')) {
                    $sql = 'ALTER TABLE `tl_bs_theme` ADD `sideMenuWidths` BLOB NULL';
                    $database->execute($sql);

                    $defaultSideMenuWidths = array(
                        array(
                            'breakpoint' => "xs",
                            'width'      => '300',
                        ),
                    );
                    $sql                   = sprintf("UPDATE `tl_bs_theme` SET `sideMenuWidths`='%s'", serialize($defaultSideMenuWidths));
                    $database->execute($sql);
                }

                $database->commitTransaction();
                $output->writeln('Finished Converting DB Entries for Colors');
            }

            if ($database->tableExists('tl_bs_theme') && $database->fieldExists('fontSizeRoot', 'tl_bs_theme')) {

                $sql = 'SELECT id, fontSizeRoot FROM tl_bs_theme WHERE fontSizeRoot != "" AND INSTR(fontSizeRoot, "px") = 0 AND fontSizeRoot != ?';
                $rs  = $database->prepare($sql)->execute(serialize(['unit'=>'','value'=>'']));
                if ($rs->count() > 0) {
                    $output->writeln('Start Converting DB Entries for fontSizeRoot');
                    $database->beginTransaction();
                    foreach ($rs as $entry) {
                        $aFontSizeRoot = deserialize($entry->fontSizeRoot);
                        switch ($aFontSizeRoot['unit']) {
                            case 'px':
                                break;
                            case 'rem':
                            case 'em':
                            case '%':
                                $aFontSizeRoot['value'] = $aFontSizeRoot['value'] * 16;
                                $aFontSizeRoot['unit'] = 'px';
                                break;
                            case 'pt':
                                $aFontSizeRoot['value'] = $aFontSizeRoot['value'] / 12 * 16;
                                $aFontSizeRoot['unit'] = 'px';
                                break;
                            case 'pc':
                                $aFontSizeRoot['value'] = $aFontSizeRoot['value'] * 16;
                            default:
                                $aFontSizeRoot['unit'] = 16;
                                $aFontSizeRoot['unit'] = 'px';
                        }
                        $sql = 'UPDATE tl_bs_theme SET fontSizeRoot = ? WHERE id = ?';
                        $database->prepare($sql)->execute(serialize($aFontSizeRoot), $entry->id);
                    }
                    $database->commitTransaction();
                    $output->writeln('Finished Converting DB Entries for fontSizeRoot');
                }
            }
        } catch (\Exception $exception) {
            return;
        }
    }

    /**
     * @param array  $attributes
     * @param Result $themeResult
     * @param array  $colors
     * @return array
     */
    private function getColors(array $attributes, Result $themeResult, array $colors)
    {
        foreach ($attributes as $attribute) {
            $name  = str_replace('gray', 'gray-', $attribute);
            $color = deserialize($themeResult->$attribute);
            if ($color[0] != '') {
                $key = $this->findKey($colors, 'name', $name);
                if ($key !== false) {
                    $colors[$key]['value'] = $color[0];
                } else {
                    $colors[] = array(
                        'name'  => $name,
                        'value' => $color[0],
                    );
                }
            }
        }

        return $colors;
    }

    /**
     * Finds the key of an multidimensional array for a given field / needle pair
     *
     * @param array  $haystack
     * @param string $field
     * @param string $needle
     * @return bool|int|string
     */
    private function findKey(array $haystack, string $field, string $needle)
    {
        foreach ($haystack as $key => $values) {
            if ($values[$field] === $needle) {
                return $key;
            }
        }

        return false;
    }

}