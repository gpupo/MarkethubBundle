<?php

namespace Gpupo\Bundle\MarkethubBundle\Factory;

use Gpupo\SubmarinoSdk\Client;

class SubmarinoFactory extends FactoryAbstract
{
    public function setClient()
    {
        $clientOptions =  [
            'token'     => $this->config['api_token'],
            'version'   => $this->config['api_version'],            
        ];
        
        $this->client =  new Client($clientOptions, $this->logger);        
    }
}
