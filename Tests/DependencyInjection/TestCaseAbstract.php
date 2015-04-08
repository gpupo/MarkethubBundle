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

namespace Gpupo\Bundle\MarkethubBundle\Tests\DependencyInjection;

use Gpupo\Bundle\MarkethubBundle\DependencyInjection\MarkethubExtension;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

abstract class TestCaseAbstract extends \PHPUnit_Framework_TestCase
{
    protected $extension;
    protected $container;

    protected function setUp()
    {
        $this->extension = new MarkethubExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
    }

    protected function loadConfiguration(ContainerBuilder $container, $resource)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/Fixtures/Config/'));
        $loader->load($resource.'.yml');
    }
}
