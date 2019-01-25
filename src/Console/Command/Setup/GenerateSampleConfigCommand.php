<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarkethubBundle
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

namespace Gpupo\MarkethubBundle\Console\Command\Setup;

use Gpupo\MarkethubBundle\Console\Command\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection\Configuration;
use Symfony\Component\Config\Definition\Dumper\YamlReferenceDumper;

final class GenerateSampleConfigCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName(self::prefix.'setup:generate-sample-config')
            ->setDescription('Generate a sample yaml config');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {



        $configuration = new Configuration();
        $yamlDumper = new YamlReferenceDumper();
        $dump = $yamlDumper->dump($configuration);
        $output->writeln([
            '',
            '---------------',
            '',
            '#<info>sample config</>:',
            '',
            $dump,
        ]);

    }
}
