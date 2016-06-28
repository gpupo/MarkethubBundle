<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Tests\Factory;

class NetshoesFactoryTest extends FactoryTestAbstract
{
    protected $factoryId = 'markethub.netshoes.factory';

    public function dataProviderServices()
    {
        return [
            [null, null],
        ];
    }

    public function dataProviderObjetos()
    {
        return [
            [null, null, null],
        ];
    }
}
