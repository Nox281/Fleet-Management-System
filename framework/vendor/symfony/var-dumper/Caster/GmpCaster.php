<?php
namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * Casts GMP objects to array representation.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @final
 */
class GmpCaster
{
    public static function castGmp(\GMP $gmp, array $a, Stub $stub, bool $isNested, int $filter): array
    {
        $a[Caster::PREFIX_VIRTUAL.'value'] = new ConstStub(gmp_strval($gmp), gmp_strval($gmp));

        return $a;
    }
}
