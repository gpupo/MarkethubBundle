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
namespace Gpupo\Bundle\MarkethubBundle\Tests\Traits;

use Gpupo\Bundle\MarkethubBundle\DependencyInjection\MarkethubExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

trait SetupContainerTrait
{
    protected $extension;
    protected $container;

    protected function setUp()
    {
        $this->extension = new MarkethubExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
        $this->container->loadFromExtension($this->extension->getAlias());
        $this->container->compile();
    }
}
