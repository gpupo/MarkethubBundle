<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Console\Command;

use Gpupo\CommonSdk\Console\Command\AbstractCommand as Core;

/**
 * @codeCoverageIgnore
 */
abstract class AbstractCommand extends Core
{
    const prefix = 'markethub:bundle:';
}
