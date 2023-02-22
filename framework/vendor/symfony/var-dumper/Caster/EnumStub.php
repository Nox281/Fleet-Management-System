<?php
namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * Represents an enumeration of values.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class EnumStub extends Stub
{
    public $dumpKeys = true;

    public function __construct(array $values, bool $dumpKeys = true)
    {
        $this->value = $values;
        $this->dumpKeys = $dumpKeys;
    }
}
