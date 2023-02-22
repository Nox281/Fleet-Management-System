<?php
namespace Symfony\Component\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Data;

/**
 * DataDumperInterface for dumping Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DataDumperInterface
{
    public function dump(Data $data);
}
