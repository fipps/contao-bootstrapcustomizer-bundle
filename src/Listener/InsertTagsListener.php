<?php
/**
 *  Copyright Information
 *
 * @copyright: 2018 agentur fipps e.K.
 * @author   : Arne Borchert <arne.borchert@fipps.de>
 * @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\Listener;


use Contao\CoreBundle\Framework\Adapter;
use Contao\CoreBundle\Framework\ContaoFramework;
use Contao\CoreBundle\ServiceAnnotation\Hook;
use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;

class InsertTagsListener implements ServiceAnnotationInterface
{

    /**
     * @Hook("replaceInsertTags")
     */
    public function onReplaceInsertTags(string $insertTag, bool $useCache, string $cachedValue, array $flags, array $tags, array $cache, int $_rit, int $_cnt)
    {
        return false;
    }
}