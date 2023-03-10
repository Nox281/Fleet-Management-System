<?php
namespace Symfony\Component\Finder\Iterator;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 *
 * @internal
 */
class LazyIterator implements \IteratorAggregate
{
    private $iteratorFactory;

    public function __construct(callable $iteratorFactory)
    {
        $this->iteratorFactory = $iteratorFactory;
    }

    public function getIterator(): \Traversable
    {
        yield from ($this->iteratorFactory)();
    }
}
