<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Tests;

use Gpupo\MarkethubBundle\Tests\Traits\SetupContainerTrait;

abstract class TestCaseAbstract extends \PHPUnit\Framework\TestCase
{
    use SetupContainerTrait;
}
