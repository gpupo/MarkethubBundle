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

use Gpupo\SubmarinoSdk\Client;

class SubmarinoFactory extends FactoryAbstract
{
    public function getDelegateSchema($key)
    {
        $list = $this->getGenericSchemaByNamespace('\Gpupo\SubmarinoSdk\Entity\\');

        return $this->resolvSchema($list, $key);
    }

    public function setClient()
    {
        $clientOptions =  [
            'token'     => $this->config['api_token'],
            'version'   => $this->config['api_version'],
        ];

        $this->client =  new Client($clientOptions, $this->logger);
    }
}
