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
use Contao\LayoutModel;
use Contao\PageModel;
use Fipps\BootstrapCustomizerBundle\Model\BsThemeModel;

/**
 * @Hook("outputFrontendTemplate")
 */
class OutputFrontendTemplateListener
{
    public function __invoke(string $buffer, string $template): string
    {
        if ($template === 'fe_bootstrap') {
            /** @var PageModel $objPage */
            global $objPage;
            /** @var LayoutModel $objLayout */
            $objLayout = LayoutModel::findById($objPage->layoutId);
            /** @var BsThemeModel $bsTheme */
            $bsTheme = BsThemeModel::findById($objLayout->bootstrapScssFile);
            if ($bsTheme !== null && $bsTheme->useSideMenu == 1) {
                $sideMenuButtonId = ($bsTheme->sideMenuButtonId ?: '.navbar-collapse2');
                $buffer           = preg_replace('/(<body\b[^><]*)>/i', '$1 data-sidemenu-button="'.$sideMenuButtonId.'">', $buffer);
            }
        }

        return $buffer;
    }
}