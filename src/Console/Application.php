<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Console;

use Gpupo\CommonSdk\Console\AbstractApplication;
use Gpupo\CommonSdk\Factory;
use Gpupo\CommonSdk\FactoryInterface;
use Psr\Log\LoggerInterface;
use Symfony\Contracts\Cache\CacheInterface;

final class Application extends AbstractApplication
{
    #[\Override]
    public function factorySdk(array $options, LoggerInterface $logger = null, CacheInterface $cache = null): FactoryInterface
    {
        return new Factory($options, $logger, $cache);
    }
}
