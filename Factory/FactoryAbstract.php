<?php

namespace Gpupo\Bundle\MarkethubBundle\Factory;

use Psr\Log\LoggerInterface;

abstract class FactoryAbstract
{
    protected $config;
    protected $logger;
    protected $client;
    
    public function __construct(array $config = [], LoggerInterface $logger = null)
    {
        $this->config = $config;
        $this->logger = $logger;          
    }
    
    abstract public function setClient();
    
    public function getClient()
    {
        if (!$this->client) {
            $this->setClient();
        }
        
        return $this->client;
    }
    
    public function factoryManager($className)
    {
        return new $className($this->getClient());
    }
}
