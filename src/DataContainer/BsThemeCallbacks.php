<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\DataContainer;


use Contao\Automator;
use Contao\File;
use Database\Result;

class BsThemeCallbacks
{
    /**
     * @param \DataContainer $dc
     */
    public function onSubmit(\DataContainer $dc)
    {
            $data = $dc->activeRecord->row();
            foreach ($data as $key => $value) {
                $arr = unserialize($value);
                if ($arr !== false) {
                    $data[$key] = $arr;
                }
            }

        $container = \System::getContainer();
        $rootDir = $container->getParameter('kernel.project_dir');
        $data['pathToBootstrap'] = $rootDir.'/assets/bootstrap';

        $twigRenderer = \System::getContainer()->get('templating');
        $rendered     = $twigRenderer->render('@FippsBootstrapCustomizer/theme.scss.twig', $data);

        // Write rendered scss.twig to SCSS file
        $path = \FilesModel::findById($data['path'])->path;
        $warning = <<<EOF
/*------------------------------------------- */
/*              W A R N I N G                 */
/*     DO NOT EDIT THIS FILE MANUALLY         */
/*     THIS FILE WILL BE OVERWRITTEN!         */
/*------------------------------------------- */

EOF;

        $filePath = strtolower($path.'/'.$data['title'].'.scss');
        $file = new File($filePath);
        $file->write($warning.$rendered);
        $file->close();

        // Refresh CSS-Files
        $automator = new Automator();
        $automator->purgeScriptCache();
    }

    /**
     * @param array          $row
     * @param string         $label
     * @param \DataContainer $dc
     * @param array          $args
     * @return array
     */
    public function getAuthorLabel(array $row, string $label, \DataContainer $dc, array $args)
    {

        $user = \UserModel::findById($args[1]);
        if ($user !== false) {
            $args[1] = $user->name;
        }

        return $args;
    }
}