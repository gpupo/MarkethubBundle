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

namespace Gpupo\Tests\MarkethubBundle\Factory;

use Gpupo\Tests\CommonSdk\FactoryTestAbstract as CommonTest;
use Gpupo\Tests\MarkethubBundle\Traits\SetupContainerTrait;

abstract class FactoryTestAbstract extends CommonTest
{
    use SetupContainerTrait;

    protected $enabled = false;

    protected $factoryId;

    public function getFactory()
    {
        return $this->container->get($this->factoryId);
    }

    public function testFalhaAoAcessarFactoryInexistente()
    {
        if (true !== $this->isEnabled()) {
            return $this->markTestIncomplete('Class disabled');
        }

        $this->expectException(\BadMethodCallException::class);



        $service = $this->container->get('test.'.$this->factoryClass);



        return $service->createDinossauro([]);
    }

    /**
     * @dataProvider dataProviderServices
     *
     * @param mixed $objectExpected
     * @param mixed $serviceId
     */
    public function testAcessoAServicosDeSdk($objectExpected, $serviceId)
    {
        if (false === $this->isEnabled()) {
            return $this->markTestIncomplete('Class disabled');
        }

        if (null === $objectExpected) {
            return $this->markTestIncomplete();
        }

        $object = $this->container->get($serviceId);
        $this->assertInstanceOf($objectExpected, $object);
    }

    /**
     * @dataProvider dataProviderObjetos
     * {@inheritdoc}
     */
    public function testCentralizaCriacaoDeObjetos($objectExpected, $name, array $data = null)
    {
        if (false === $this->isEnabled()) {
            return $this->markTestIncomplete('Class disabled');
        }

        return parent::testCentralizaCriacaoDeObjetos($objectExpected, $name, $data);
    }

    abstract public function dataProviderServices();

    protected function isEnabled(): bool
    {
        return $this->enabled;
    }
}
