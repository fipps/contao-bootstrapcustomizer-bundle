<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\Listener;

use Fipps\BootstrapCustomizerBundle\Model\BsThemeModel;

class HooksListener
{

    /**
     * Add all activated / used JS and CSS
     *
     * @param \PageModel   $objPage
     * @param \LayoutModel $objLayout
     * @param \PageRegular $objPageRegular
     */
    public function onGetPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if ($objLayout->bootstrapScssFile != '') {

            if (!$objLayout->addJQuery) {
                if (\Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.js|static';
                } else {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.min.js|static';
                }
            }
            if (\Config::get('debugMode')) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.js';
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/activate_plugins.js|async';
            } else {
                $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.min.js';
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/activate_plugins.min.js|async';
            }

            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);
            if ($bsTheme !== null) {
                $bsThemePath         = \FilesModel::findById($bsTheme->path)->path;
                $cssFile             = $bsThemePath.'/'.strtolower(str_replace(' ', '_', trim($bsTheme->title)).'.css');
                $GLOBALS['TL_CSS'][] = $cssFile.'|static';

                if ($bsTheme->useSideMenu) {
                    if (\Config::get('debugMode')) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/side-menu.js|async';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/side-menu.min.js|async';
                    }
                }
                if ($bsTheme->enableStickyJS) {
                    if (\Config::get('debugMode')) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/jquery.sticky.js';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/jquery.sticky.min.js';
                    }
                }
            }
        }
    }

    /**
     * Corrects invalid URL to mootools/colorpicker and redirects
     */
    public function onInitializeSystemCorrectColorPicker()
    {
        $request = \Environment::get('request');

        if (strpos($request, 'assets/mootools/colorpicker//') !== false) {
            $request = str_replace('assets/mootools/colorpicker//', 'assets/colorpicker/', $request);
            \Controller::redirect(\Environment::get('base').$request, 301);
        }
    }

    /**
     * Sets BootstrapTypoCSS-Path for TinyMCE
     */
    public function onInitializeSystemLSetBootstrapTypoCssPath()
    {
        $request = \Environment::get('request');

        if (\defined(TL_MODE) && TL_MODE == 'BE' && strpos($request, 'contao/install') === false) {
            $bsTheme = BsThemeModel::findOneBy('useInTinyMCE', 1);
            if ($bsTheme !== null) {
                $bsThemePath = \FilesModel::findById($bsTheme->path)->path;
                $cssFile     = $bsThemePath.'/'.strtolower(str_replace(' ', '_', trim($bsTheme->title))).'_typo.css';

                $GLOBALS['TinyMCE']['bootstrap_css_file'] = $cssFile;
            }
        }
    }
}