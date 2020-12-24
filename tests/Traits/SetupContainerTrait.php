<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests\Traits;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection\MarkethubExtension;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\DependencyInjection\Alias;
use Symfony\Component\DependencyInjection\ContainerBuilder;

trait SetupContainerTrait
{
    protected $extension;
    protected $container;

    protected function setUp(): void
    {
        $this->extension = new MarkethubExtension();
        $this->container = new ContainerBuilder();
        $this->container->registerExtension($this->extension);
        $this->container->loadFromExtension($this->extension->getAlias());

        $this->container->register('filesystemCache', FilesystemCache::class);
        $this->container->setAlias('cache', new Alias('filesystemCache', true));

        $this->container->compile();

        //Make services public
        foreach ($this->container->getDefinitions() as $id => $definition) {
            $testId = 'test.'.$id;
            $this->container->setAlias($testId, $id);
        }
    }
}
