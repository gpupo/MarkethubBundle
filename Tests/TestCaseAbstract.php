<?php

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Gpupo\Bundle\MarkethubBundle\Tests;

use Gpupo\Bundle\MarkethubBundle\Tests\Traits\SetupContainerTrait;

abstract class TestCaseAbstract extends \PHPUnit_Framework_TestCase
{
    use SetupContainerTrait;
}
