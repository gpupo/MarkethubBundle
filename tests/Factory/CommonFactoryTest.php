<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests\Factory;

use Gpupo\CommonSdk\Entity\Entity;
use Gpupo\MarkethubBundle\Factory\CommonFactory;

/**
 * @coversNothing
 */
class CommonFactoryTest extends FactoryTestAbstract
{
    protected $factoryClass = CommonFactory::class;
    protected $factoryId = 'test.'.CommonFactory::class;

    public function getFactory()
    {
        return parent::getFactory()->setOptions([
            'client_id' => '987643',
            'client_secret' => 'Remarkable touch',
            'access_token' => 'XZHS5b3cc535-common-e4b042f9f26ba249',
            'user_id' => 1123,
            'refresh_token' => 66777,
            'verbose' => true,
            'cacheTTL' => 3600,
            'offset' => 5,
            'limit' => 20,
        ]);
    }

    public function testIsAFactory()
    {
        $factory = new CommonFactory();

        $this->assertSame('markethub.common.factory', $factory::id);
    }

    public function dataProviderServices()
    {
        return [
            [CommonFactory::class, $this->factoryId],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            [Entity::class, 'generic', []],
        ];
    }
}
