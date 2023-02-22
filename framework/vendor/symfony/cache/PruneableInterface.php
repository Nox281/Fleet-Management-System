<?php
namespace Symfony\Component\Cache;

/**
 * Interface extends psr-6 and psr-16 caches to allow for pruning (deletion) of all expired cache items.
 */
interface PruneableInterface
{
    /**
     * @return bool
     */
    public function prune();
}
