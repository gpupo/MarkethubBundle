<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests\Factory;

use Gpupo\CommonSchema\ORM\Entity\Catalog\Product\Product;
use Gpupo\CommonSchema\ORM\Entity\Trading\Order\Order;
use Gpupo\MarkethubBundle\Factory\SubmarinoFactory;

/**
 * @coversNothing
 */
class SubmarinoFactoryTest extends FactoryTestAbstract
{
    protected $factoryClass = SubmarinoFactory::class;
    protected $factoryId = 'test.'.SubmarinoFactory::class;

    public function getFactory()
    {
        return parent::getFactory()->setOptions([
            'user_email' => 'markethub@bundle',
            'api_key' => 'markethub@bundle',
            'accountmanager_key' => 'markethub@bundle',
        ]);
    }

    public function testSetApplicationApiClient()
    {
        $factory = $this->getFactory();
        $this->assertSame('markethub@bundle', $factory->getOptions()->get('accountmanager_key'));
        $this->assertSame($factory->getOptions()->get('user_email'), $factory->getClient()->getOptions()->get('user_email'), 'Primal values');
    }

    public function dataProviderServices()
    {
        return [
            [SubmarinoFactory::class, $this->factoryId],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            [Product::class, 'product', null],
            [Order::class, 'order', null],
        ];
    }
}
