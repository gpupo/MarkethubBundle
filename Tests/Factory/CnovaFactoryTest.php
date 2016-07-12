<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Tests\Factory;

class CnovaFactoryTest extends FactoryTestAbstract
{
    protected $factoryId = 'markethub.cnova.factory';

    public function dataProviderServices()
    {
        return [
            ['\Gpupo\Bundle\MarkethubBundle\Factory\CnovaFactory', 'markethub.cnova.factory'],
            ['\Gpupo\CommonSdk\Client\ClientInterface', 'markethub.cnova.client'],
            ['\Gpupo\CnovaSdk\Entity\Product\Manager', 'markethub.cnova.product.manager'],
            ['\Gpupo\CnovaSdk\Entity\Order\Manager', 'markethub.cnova.order.manager'],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            ['\Gpupo\CnovaSdk\Entity\Product\Product', 'product', null],
            ['\Gpupo\CnovaSdk\Entity\Order\Order', 'order', null],
        ];
    }
}
