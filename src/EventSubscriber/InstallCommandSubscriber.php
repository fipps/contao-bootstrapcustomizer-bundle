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
     */
    public function __construct(KernelInterface $kernel)
    {
        $this->rootDir = dirname($kernel->getRootDir());
        $this->fs = new Filesystem();
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
        $output = $event->getOutput();
        $command = $event->getCommand();
        $exitCode = $event->getExitCode();

        if (!($command instanceof SymlinksCommand) || $exitCode > 0) {
            return;
        }

        $this->fs->mkdir($this->rootDir.'/assets/bootstrap');
        SymlinkUtil::symlink('vendor/twbs/bootstrap/dist/js', 'assets/bootstrap/js', $this->rootDir);
        SymlinkUtil::symlink('vendor/twbs/bootstrap/scss', 'assets/bootstrap/scss', $this->rootDir);

        $output->writeln('Symlinked assets/bootstrap scss and js files to twbs/bootstrap');
    }

}