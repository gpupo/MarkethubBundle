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

class BrandloversFactoryTest extends FactoryTestAbstract
{
    protected $factoryId = 'markethub.brandlovers.factory';

    public function dataProviderServices()
    {
        return [
            ['\Gpupo\Bundle\MarkethubBundle\Factory\BrandloversFactory', 'markethub.brandlovers.factory'],
            ['\Gpupo\CommonSdk\Client\ClientInterface', 'markethub.brandlovers.client'],
            ['\Gpupo\BrandloversSdk\Entity\Product\Manager', 'markethub.brandlovers.product.manager'],
            ['\Gpupo\BrandloversSdk\Entity\Order\Manager', 'markethub.brandlovers.order.manager'],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            ['\Gpupo\BrandloversSdk\Entity\Product\Product', 'product', null],
            ['\Gpupo\BrandloversSdk\Entity\Order\Order', 'order', null],
        ];
    }
}
