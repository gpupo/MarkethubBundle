<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Tests\Factory;

class SubmarinoFactoryTest extends FactoryTestAbstract
{
    protected $factoryId = 'markethub.submarino.factory';

    public function dataProviderServices()
    {
        return [
            ['\Gpupo\Bundle\MarkethubBundle\Factory\SubmarinoFactory', 'markethub.submarino.factory'],
            ['\Gpupo\CommonSdk\Client\ClientInterface', 'markethub.submarino.client'],
            ['\Gpupo\SubmarinoSdk\Entity\Product\Manager', 'markethub.submarino.product.manager'],
            ['\Gpupo\SubmarinoSdk\Entity\Product\Sku\Manager', 'markethub.submarino.product.sku.manager'],
            ['\Gpupo\SubmarinoSdk\Entity\Order\Manager', 'markethub.submarino.order.manager'],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            ['\Gpupo\SubmarinoSdk\Entity\Product\Product', 'product', null],
            ['\Gpupo\SubmarinoSdk\Entity\Product\Sku\Sku', 'sku', null],
            ['\Gpupo\SubmarinoSdk\Entity\Order\Order', 'order', null],
        ];
    }
}
