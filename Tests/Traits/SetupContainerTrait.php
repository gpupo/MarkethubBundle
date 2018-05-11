<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/markethub-bundle
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

namespace Gpupo\Tests\MarkethubBundle\Traits;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection\MarkethubExtension;
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
