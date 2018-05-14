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

namespace Gpupo\Tests\MarkethubBundle\Factory;

use Gpupo\MarkethubBundle\Factory\MercadolivreFactory;

/**
 * @coversNothing
 */
class MercadolivreFactoryTest extends FactoryTestAbstract
{
    protected $factoryClass = MercadolivreFactory::class;
    protected $factoryId = 'test.'.MercadolivreFactory::class;

    public function dataProviderServices()
    {
        return [
            [MercadolivreFactory::class, $this->factoryId],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            ['\Gpupo\MercadolivreSdk\Entity\Product\Product', 'product', null],
            ['\Gpupo\MercadolivreSdk\Entity\Order\Order', 'order', null],
        ];
    }
}
