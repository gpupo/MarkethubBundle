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

use Gpupo\Bundle\MarkethubBundle\Tests\TestCaseAbstract;

abstract class FactoryTestAbstract extends TestCaseAbstract
{    
    abstract public function dataProviderServices();
    
    /**
     * @dataProvider dataProviderServices
     */
    public function testAcessoAServicosDeSdk($objectExpected, $serviceId)
    {
        $this->assertInstanceOf($objectExpected, $this->container->get($serviceId));
    }
}
