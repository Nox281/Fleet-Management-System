<?php
namespace Symfony\Component\HttpFoundation\File;

/**
 * A PHP stream of unknown size.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Stream extends File
{
    /**
     * {@inheritdoc}
     *
     * @return int|false
     */
    #[\ReturnTypeWillChange]
    public function getSize()
    {
        return false;
    }
}
