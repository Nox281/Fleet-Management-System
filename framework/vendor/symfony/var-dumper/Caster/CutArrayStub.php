<?php
namespace Symfony\Component\VarDumper\Caster;

/**
 * Represents a cut array.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CutArrayStub extends CutStub
{
    public $preservedSubset;

    public function __construct(array $value, array $preservedKeys)
    {
        parent::__construct($value);

        $this->preservedSubset = array_intersect_key($value, array_flip($preservedKeys));
        $this->cut -= \count($this->preservedSubset);
    }
}
