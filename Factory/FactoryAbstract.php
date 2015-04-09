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

    abstract public function getDelegateSchema($name);

    protected function resolvSchema(array $list, $key)
    {
        if (!array_key_exists($key, $list)) {
            throw new \BadMethodCallException('Faltando Factory Schema');
        }

        return $list[$key];
    }

    protected function getGenericSchemaByNamespace($namespace)
    {
        return [
            'product' => [
                'class'  => $namespace.'Product\Factory',
                'method' => 'factoryProduct',
            ],
            'sku' => [
                'class'  => $namespace.'Product\Factory',
                'method' => 'factorySku',
            ],
            'order' => [
                'class'  => $namespace.'Order\Factory',
                'method' => 'factoryOrder',
            ],
        ];
    }

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

    protected function delegate($name, $data)
    {
        $schema = $this->getDelegateSchema($name);

        return $schema['class']::$schema['method']($data);
    }

    /**
     * @param string $method
     * @param array  $args
     *
     * @throws \BadMethodCallException
     *
     * @return mixed
     */
    public function __call($method, $args)
    {
        $command = substr($method, 0, 6);
        $object = substr($method, 6);
        $object[0] = strtolower($object[0]);

        if ($command === 'create') {
            return $this->delegate($object, current($args));
        } else {
            throw new \BadMethodCallException('There is no method '.$method);
        }
    }
}
