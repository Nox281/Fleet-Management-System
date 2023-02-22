<?php
namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends Stub
{
    public function __construct($key, $value)
    {
        $this->value = [
            Caster::PREFIX_VIRTUAL.'key' => $key,
            Caster::PREFIX_VIRTUAL.'value' => $value,
        ];
    }
}
