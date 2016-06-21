<?php

/*
 * This file is part of gpupo/markethub-bundle
 *
 * (c) Gilmar Pupo <g@g1mr.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @version 1.0
 */
namespace Gpupo\Bundle\MarkethubBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('markethub')
            ->children()
                ->booleanNode('enabled')->defaultTrue()->end()
                ->arrayNode('submarino')
                    ->children()
                        ->booleanNode('enabled')->defaultFalse()->end()
                        ->scalarNode('api_token')->defaultValue('')->end()
                        ->scalarNode('api_version')->defaultValue('sandbox')->end()
                        ->booleanNode('verbose')->defaultFalse()->end()
                        ->scalarNode('ssl_version')->defaultValue('SecureTransport')->end()
                    ->end()
                ->end()
                ->arrayNode('cnova')
                    ->children()
                        ->booleanNode('enabled')->defaultFalse()->end()
                        ->scalarNode('client_id')->defaultValue('')->end()
                        ->scalarNode('access_token')->defaultValue('')->end()
                        ->scalarNode('api_version')->defaultValue('sandbox')->end()
                        ->booleanNode('verbose')->defaultFalse()->end()
                        ->scalarNode('register_path')->defaultValue('')->end()
                        ->scalarNode('ssl_version')->defaultValue('SecureTransport')->end()
                        ->booleanNode('ssl_verify_peer')->defaultTrue()->end()
                    ->end()
                ->end()
                ->arrayNode('netshoes')
                    ->children()
                        ->booleanNode('enabled')->defaultFalse()->end()
                        ->scalarNode('client_id')->defaultValue('')->end()
                        ->scalarNode('access_token')->defaultValue('')->end()
                        ->scalarNode('api_version')->defaultValue('sandbox')->end()
                        ->booleanNode('verbose')->defaultFalse()->end()
                        ->scalarNode('register_path')->defaultValue('')->end()
                        ->scalarNode('ssl_version')->defaultValue('SecureTransport')->end()
                        ->booleanNode('ssl_verify_peer')->defaultTrue()->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
