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

class ZattiniFactoryTest extends FactoryTestAbstract
{
    protected $factoryId = 'markethub.zattini.factory';

    public function dataProviderServices()
    {
        return [
            ['\Gpupo\Bundle\MarkethubBundle\Factory\ZattiniFactory', 'markethub.zattini.factory'],
            ['\Gpupo\CommonSdk\Client\ClientInterface', 'markethub.zattini.client'],
            ['\Gpupo\ZattiniSdk\Entity\Product\Manager', 'markethub.zattini.product.manager'],
            ['\Gpupo\ZattiniSdk\Entity\Order\Manager', 'markethub.zattini.order.manager'],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            ['\Gpupo\ZattiniSdk\Entity\Product\Product', 'product', null],
            ['\Gpupo\ZattiniSdk\Entity\Order\Order', 'order', null],
        ];
    }
}
