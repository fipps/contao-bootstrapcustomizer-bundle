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
     * @param \PageModel   $objPage
     * @param \LayoutModel $objLayout
     * @param \PageRegular $objPageRegular
     */
    public function onGetPageLayout(\PageModel $objPage, \LayoutModel $objLayout, \PageRegular $objPageRegular)
    {
        if($objLayout->useBootstrapTheme) {

            $container = \System::getContainer();
            $rootDir = $container->getParameter('kernel.project_dir');

            $GLOBALS['TL_JAVASCRIPT'][] = 'assets/jquery/jquery.min.js|static';
            $GLOBALS['TL_JAVASCRIPT'][] = 'assets/bootstrap/js/bootstrap.bundle.min.js';

            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);
            $path = \FilesModel::findById($bsTheme->path)->path;
            $filePath = strtolower($path.'/'.$bsTheme->title.'.scss');
            $GLOBALS['TL_CSS'][] = $filePath;

            if ($objLayout->prefixfree) {
                $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/fippsbootstrapcustomizer/js/prefixfree.min.js';

            }

        }


    }
}