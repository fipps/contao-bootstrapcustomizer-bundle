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

            $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/jquery.min.js|static';
            $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.min.js';
            if ($objLayout->usePrefixfree) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/prefixfree.min.js';
            }


            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);
            $bsThenePath    = \FilesModel::findById($bsTheme->path)->path;


            $scssFilePath = strtolower($bsThenePath.'/'.$bsTheme->title.'.scss');
            $cssFile  = str_replace('/', '_', $scssFilePath).'.css';

            $rootDir   = \System::getContainer()->getParameter('kernel.project_dir');

            if (file_exists($rootDir.'/assets/css/'.$cssFile)) {
                $GLOBALS['TL_CSS'][] = 'assets/css/'.$cssFile.'|static';
            } else {
                $GLOBALS['TL_CSS'][] = $scssFilePath.'|static';
            }
        }
    }
}