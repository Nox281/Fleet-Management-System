<?php
namespace Symfony\Component\VarExporter\Internal;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class Reference
{
    public $id;
    public $value;
    public $count = 0;

    public function __construct(int $id, $value = null)
    {
        $this->id = $id;
        $this->value = $value;
    }
}
