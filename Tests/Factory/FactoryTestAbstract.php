<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Tests\Factory;

use Gpupo\Bundle\MarkethubBundle\Tests\Traits\SetupContainerTrait;
use Gpupo\Tests\CommonSdk\FactoryTestAbstract as CommonTest;

abstract class FactoryTestAbstract extends CommonTest
{
    use SetupContainerTrait;

    protected $factoryId;

    public function getFactory()
    {
        return $this->container->get($this->factoryId);
    }

    /**
     * @expectedException \BadMethodCallException
     */
    public function testFalhaAoAcessarFactoryInexistente()
    {
        return $this->container->get($this->factoryId)->createDinossauro([]);
    }

    /**
     * @dataProvider dataProviderServices
     */
    public function testAcessoAServicosDeSdk($objectExpected, $serviceId)
    {
        if (null === $objectExpected) {
            return $this->markTestIncomplete();
        }

        $object = $this->container->get($serviceId);
        $this->assertInstanceOf($objectExpected, $object);
    }

    abstract public function dataProviderServices();
}
