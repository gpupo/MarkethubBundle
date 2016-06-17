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

use Gpupo\CnovaSdk\Factory;

class CnovaFactory extends Factory
{
    public function setClient(array $clientOptions = null)
    {
        $clientOptions = [
            'client_id'     => $this->options['client_id'],
            'access_token'  => $this->options['access_token'],
            'version'       => $this->options['api_version'],
            'verbose'       => $this->options['verbose'],
            'sslVersion'    => $this->options['ssl_version'],
            'sslVerifyPeer' => $this->options['ssl_verify_peer'],
            'registerPath'  => $this->options['register_path'],
        ];

        return parent::setClient($clientOptions);
    }
}
