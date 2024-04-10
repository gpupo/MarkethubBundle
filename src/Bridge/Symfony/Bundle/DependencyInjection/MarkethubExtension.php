<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class MarkethubExtension extends Extension
{
    #[\Override]
    public function load(array $configs, ContainerBuilder $container)
    {
        $sdks = [];
        $configPath = __DIR__.'/../Resources/config';
        $loader = new XmlFileLoader($container, new FileLocator($configPath));
        $finder = new Finder();
        $finder->files()->name('*-sdk.xml')->in($configPath);
        foreach ($finder as $file) {
            $sdks[] = str_replace('-sdk.xml', '', $file->getRelativePathname());
            $loader->load($file->getRelativePathname());
        }

        //Load Commands
        $finder->files()->name('*.commands.xml')->in($configPath);
        foreach ($finder as $file) {
            $loader->load($file->getRelativePathname());
        }

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);
        foreach ($sdks as $sdk) {
            if (\array_key_exists($sdk, $config)) {
                $parameters = $config[$sdk];
            } else {
                $parameters = $container->getParameter(sprintf('markethub.%s', $sdk));
            }

            $definition = $container->getDefinition(sprintf('Gpupo\MarkethubBundle\Factory\%sFactory', ucfirst($sdk)));
            $definition->replaceArgument(0, $parameters);
        }

        return $config;
    }

    #[\Override]
    public function getConfiguration(array $config, ContainerBuilder $container)
    {
        return new Configuration();
    }
}
