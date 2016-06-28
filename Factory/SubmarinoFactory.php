<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Factory;

use Gpupo\SubmarinoSdk\Factory;

class SubmarinoFactory extends Factory
{
    public function setClient(array $clientOptions = null)
    {
        $clientOptions = [
            'token'   => $this->options['api_token'],
            'version' => $this->options['api_version'],
        ];

        return parent::setClient($clientOptions);
    }
}
