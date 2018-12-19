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
use Symfony\Component\Filesystem\Filesystem;

class HooksListener
{

    /**
     * @param \PageModel   $objPage
     * @param \LayoutModel $objLayout
     * @param \PageRegular $objPageRegular
     */
    public function onGetPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if ($objLayout->bootstrapScssFile != '') {

            if (!$objLayout->addJQuery) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/js/jquery.min.js|static';
            }
            $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.js';
            $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/activatepopper.js';
            if ($objLayout->usePrefixfree) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/prefixfree.min.js';
            }


            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);
            $bsThemePath    = \FilesModel::findById($bsTheme->path)->path;
            $cssFile  = $bsThemePath.'/'.str_replace(' ', '_', trim($bsTheme->title)).'.css';

            $GLOBALS['TL_CSS'][] = $cssFile.'|static';        }
    }
}