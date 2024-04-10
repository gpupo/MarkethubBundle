<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/MarketBundle created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file LICENSE which is
 * distributed with this source code. For more information, see <https://opensource.gpupo.com/>
 */

namespace Gpupo\MarkethubBundle\Console\Command\Setup;

use Gpupo\MarkethubBundle\Bridge\Symfony\Bundle\DependencyInjection\MarkethubExtension;
use Gpupo\MarkethubBundle\Console\Command\AbstractCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class CheckCommand extends AbstractCommand
{
    /**
     * {@inheritdoc}
     */
    #[\Override]
    protected function configure()
    {
        $this
            ->setName(self::prefix.'setup:check')
            ->setDescription('Test env');
    }

    /**
     * {@inheritdoc}
     */
    #[\Override]
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $data = $this->getProjectData();
        $output->writeln('Current config:');
        $this->writeInfo($output, $data);

        $extension = new MarkethubExtension();
        $container = new ContainerBuilder();

        $container->registerExtension($extension);
        $container->loadFromExtension($extension->getAlias());
        $container->compile();
        $output->writeln('Services:');

        foreach ($container->getDefinitions() as $id => $definition) {
            $output->writeln(sprintf("- <info>%s</> \n\t public:<bg=yellow;options=bold>%s</>", $id, $definition->isPublic() ? 'true' : 'false'));
        }
    }
}
