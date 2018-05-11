<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\Bundle\MarkethubBundle\Factory;

use Gpupo\NetshoesSdk\Factory;

class NetshoesFactory extends Factory
{
    public function setClient(array $clientOptions = null)
    {
        $clientOptions = [
            'client_id' => $this->options['client_id'],
            'access_token' => $this->options['access_token'],
            'version' => $this->options['api_version'],
            'verbose' => $this->options['verbose'],
            'sslVersion' => $this->options['ssl_version'],
            'sslVerifyPeer' => $this->options['ssl_verify_peer'],
            'registerPath' => $this->options['register_path'],
        ];

        return parent::setClient($clientOptions);
    }
}
