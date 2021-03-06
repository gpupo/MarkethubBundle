<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests\Factory;

use Gpupo\CommonSdk\Tests\FactoryTestAbstract as CommonTest;
use Gpupo\MarkethubBundle\Tests\Traits\SetupContainerTrait;

abstract class FactoryTestAbstract extends CommonTest
{
    use SetupContainerTrait;

    protected $factoryId;

    public function getFactory()
    {
        return $this->container->get('test.'.$this->factoryClass);
    }

    public function testFalhaAoAcessarFactoryInexistente()
    {
        $this->expectException(\Exception::class);

        return $this->getFactory()->createAcmeBar([]);
    }

    /**
     * @dataProvider dataProviderServices
     *
     * @param mixed $objectExpected
     * @param mixed $serviceId
     */
    public function testAcessoAServicosDeSdk($objectExpected, $serviceId)
    {
        $object = $this->container->get($serviceId);
        $this->assertInstanceOf($objectExpected, $object);
    }

    abstract public function dataProviderServices();
}
