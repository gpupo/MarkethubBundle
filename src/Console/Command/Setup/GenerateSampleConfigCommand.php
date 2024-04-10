<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Console\Command\Setup;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection\Configuration;
use Gpupo\MarkethubBundle\Console\Command\AbstractCommand;
use Symfony\Component\Config\Definition\Dumper\YamlReferenceDumper;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class GenerateSampleConfigCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    #[\Override]
    protected function configure()
    {
        $this
            ->setName(self::prefix.'setup:generate-sample-config')
            ->setDescription('Generate a sample yaml config');
    }

    /**
     * {@inheritdoc}
     */
    #[\Override]
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
