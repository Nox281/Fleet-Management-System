<?php
namespace Symfony\Component\Console\Descriptor;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Descriptor interface.
 *
 * @author Jean-François Simon <contact@jfsimon.fr>
 */
interface DescriptorInterface
{
    public function describe(OutputInterface $output, object $object, array $options = []);
}
