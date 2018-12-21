<?php
/**
 *  Copyright Information
 *  @copyright: 2018 agentur fipps e.K.
 *  @author   : Arne Borchert <arne.borchert@fipps.de>
 *  @license  : LGPL 3.0+
 */

namespace Fipps\BootstrapCustomizerBundle\ContaoManager;

use Fipps\BootstrapCustomizerBundle\FippsBootstrapCustomizerBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Config\ConfigPluginInterface;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

/**
 * Plugin for the Contao Manager.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(FippsBootstrapCustomizerBundle::class)->setLoadAfter(
                [
                    ContaoCoreBundle::class,
                ]
            )
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader, array $config)
    {
        $loader->load('@FippsBootstrapCustomizerBundle/Resources/config/config.yml');
    }

    /**
     * {@inheritdoc}
     */
    public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
    {
        $file = '@FippsBootstrapCustomizerBundle/Resources/config/routing.yml';

        return $resolver->resolve($file)->load($file);
    }

    /**
     * {@inheritdoc}
     */
    public function getPackageDependencies()
    {
        return [];
    }

}