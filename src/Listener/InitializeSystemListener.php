<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\Listener;

use Contao\CoreBundle\ServiceAnnotation\Hook;
use Fipps\BootstrapCustomizerBundle\Model\BsThemeModel;
use Environment;
use Controller;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class InitializeSystemListener implements ServiceAnnotationInterface
{

    /**
     * @Hook("initializeSystem", priority=0)
     * Corrects invalid URL to mootools/colorpicker and redirects
     */
    public function onInitializeSystemCorrectColorPicker()
    {
        $request = Environment::get('request');

        if (strpos($request, 'assets/mootools/colorpicker//') !== false) {
            $request = str_replace('assets/mootools/colorpicker//', 'assets/colorpicker/', $request);
            Controller::redirect(Environment::get('base').$request, 301);
        }
    }

    /**
     * @Hook("initializeSystem", priority=0)
     * Sets BootstrapTypoCSS-Path for TinyMCE
     */
    public function onInitializeSystemLSetBootstrapTypoCssPath()
    {
        $request = Environment::get('request');

        if (defined('TL_MODE') && TL_MODE == 'BE' && strpos($request, 'contao/install') === false ) {
            $bsTheme = BsThemeModel::findOneBy('useInTinyMCE', 1);
            if (null !== $bsTheme) {
                $bsThemePath = \FilesModel::findById($bsTheme->path)->path;
                $cssFile     = $bsThemePath.'/'.strtolower(str_replace(' ', '_', trim($bsTheme->title))).'_typo.css';

                $GLOBALS['TinyMCE']['bootstrap_css_file'] = $cssFile;
            }
        }
    }
}