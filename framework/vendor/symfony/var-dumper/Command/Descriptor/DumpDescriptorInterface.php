<?php
namespace Symfony\Component\VarDumper\Command\Descriptor;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface DumpDescriptorInterface
{
    public function describe(OutputInterface $output, Data $data, array $context, int $clientId): void;
}
