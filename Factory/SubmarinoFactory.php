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

namespace Gpupo\Bundle\MarkethubBundle\Factory;

use Gpupo\SubmarinoSdk\Factory;

class SubmarinoFactory extends Factory
{
    public function setClient(array $clientOptions = null)
    {
        $clientOptions = [
            'token'     => $this->config['api_token'],
            'version'   => $this->config['api_version'],
        ];

        return parent::setClient($clientOptions);
    }
}
