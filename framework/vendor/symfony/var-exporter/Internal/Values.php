<?php
namespace Symfony\Component\VarExporter\Internal;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Values
{
    public $values;

    public function __construct(array $values)
    {
        $this->values = $values;
    }
}
