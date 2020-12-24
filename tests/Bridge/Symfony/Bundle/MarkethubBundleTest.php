<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests\Bridge\Symfony\Bundle;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\MarkethubBundle;
use Gpupo\MarkethubBundle\Tests\TestCaseAbstract;
use Gpupo\MarkethubBundle\Tests\Traits\SetupContainerTrait;

/**
 * @coversNothing
 */
class MarkethubBundleTest extends TestCaseAbstract
{
    use SetupContainerTrait;

    public function testBuild()
    {
        $bundle = new MarkethubBundle();
        $bundle->setContainer($this->container);
        $bundle->boot();

        $this->assertSame('MarkethubBundle', $bundle->getName());
    }
}
