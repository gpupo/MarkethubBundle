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

        $object =  $this->container->get($serviceId);
        $this->assertInstanceOf($objectExpected, $object);
    }

    abstract public function dataProviderServices();
}
