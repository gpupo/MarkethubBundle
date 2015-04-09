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

class SubmarinoFactoryTest extends FactoryTestAbstract
{   
    public function dataProviderServices()
    {
        return [
            ['\Gpupo\Bundle\MarkethubBundle\Factory\SubmarinoFactory', 'markethub.submarino.factory'],
            ['\Gpupo\CommonSdk\ClientInterface', 'markethub.submarino.client'],
            ['\Gpupo\SubmarinoSdk\Entity\Product\Manager', 'markethub.submarino.product.manager'],
            ['\Gpupo\SubmarinoSdk\Entity\Product\Sku\Manager', 'markethub.submarino.product.sku.manager'],
            ['\Gpupo\SubmarinoSdk\Entity\Order\Manager','markethub.submarino.order.manager'],
        ];
    }
}