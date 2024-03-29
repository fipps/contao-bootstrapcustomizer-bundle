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
use Contao\Config;
use Contao\FilesModel;
use Contao\PageRegular;
use Contao\LayoutModel;
use Contao\PageModel;
use Fipps\BootstrapCustomizerBundle\Model\BsThemeModel;

/**
 * Class PageLayoutListener
 *
 * @package Fipps\BootstrapCustomizerBundle\Listener
 * @Hook("getPageLayout", priority=0)
 */
class PageLayoutListener
{

    /**
     * Add all activated / used JS and CSS
     *
     * @param PageModel   $objPage
     * @param LayoutModel $objLayout
     * @param PageRegular $pageRegular
     */
    public function __invoke(PageModel $objPage, LayoutModel $objLayout, PageRegular $pageRegular) : void
    {

        if ($objLayout->bootstrapScssFile != '') {
            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);

            if ($bsTheme !== null) {

                if (!$objLayout->addJQuery) {
                    if (Config::get('debugMode')) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.js|static';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.min.js|static';
                    }
                }
                if (Config::get('debugMode')) {
                    $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.js|static';
                    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/activate_plugins.js|async';
                } else {
                    if ($bsTheme->useDropdown || $bsTheme->usePopover || $bsTheme->useTooltip) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.min.js|static';
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/activate_plugins.min.js|async';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.min.js|static';
                    }
                }

                $bsThemePath         = FilesModel::findById($bsTheme->path)->path;
                $cssFile             = $bsThemePath.'/'.strtolower(str_replace(' ', '_', trim($bsTheme->title)).'.css');
                $GLOBALS['TL_CSS'][] = $cssFile.'|static';

                if ($bsTheme->useSideMenu) {
                    if (Config::get('debugMode')) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/side-menu.js|async';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/side-menu.min.js|async';
                    }
                }
                if ($bsTheme->enableStickyJS) {
                    if (Config::get('debugMode')) {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/jquery.sticky.js|static';
                    } else {
                        $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/jquery.sticky.min.js|static';
                    }
                }
            }
        }
    }
}