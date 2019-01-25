<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('markethub');
        $rootNode = $treeBuilder->getRootNode();
        $rootNode
            ->children()
            ->booleanNode('enabled')->defaultTrue()->end()
            //mercadolivre-sdk
            ->arrayNode('mercadolivre')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->scalarNode('client_id')->defaultValue('')->end()
            ->scalarNode('access_token')->defaultValue('')->end()
            ->scalarNode('api_version')->defaultValue('sandbox')->end()
            ->scalarNode('common_schema_namespace')->defaultValue('\\App')->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->scalarNode('app_url')->defaultValue('http://localhost')->end()
            ->integerNode('cacheTTL')->min(0)->defaultValue(3600)->end()
            ->integerNode('limit')->min(10)->max(50)->defaultValue(50)->end()
            ->end()->end()
            //mercadolivre-sdk eof

            //mercadopago-sdk
            ->arrayNode('mercadopago')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->scalarNode('client_id')->defaultValue('')->end()
            ->scalarNode('access_token')->defaultValue('')->end()
            ->scalarNode('api_version')->defaultValue('sandbox')->end()
            ->scalarNode('common_schema_namespace')->defaultValue('\\App')->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->scalarNode('app_url')->defaultValue('http://localhost')->end()
            ->integerNode('cacheTTL')->min(0)->defaultValue(3600)->end()
            ->integerNode('limit')->min(10)->max(50)->defaultValue(50)->end()
            ->end()->end()
            //mercadopago-sdk eof

            //submarino-sdk
            ->arrayNode('submarino')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->scalarNode('user_email')->defaultValue('foo@fill please dot com')->end()
            ->scalarNode('api_key')->defaultValue('fill')->end()
            ->scalarNode('accountmanager_key')->defaultValue('fill')->end()
            ->scalarNode('common_schema_namespace')->defaultValue('\\App')->end()
            ->scalarNode('app_url')->defaultValue('http://localhost')->end()
            ->integerNode('cacheTTL')->min(0)->defaultValue(3600)->end()
            ->integerNode('limit')->min(10)->max(50)->defaultValue(50)->end()
            ->end()->end()
            //submarino-sdk eof

            //common-sdk
            ->arrayNode('common')->children()
            ->booleanNode('enabled')->defaultFalse()->end()
            ->booleanNode('verbose')->defaultFalse()->end()
            ->end()->end()
            //common-sdk eof

            ->end();

        return $treeBuilder;
    }
}
