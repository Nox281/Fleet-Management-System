<?php
namespace Symfony\Contracts\Cache;

use Psr\Cache\InvalidArgumentException;

/**
 * Allows invalidating cached items using tags.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface TagAwareCacheInterface extends CacheInterface
{
    /**
     * Invalidates cached items using tags.
     *
     * When implemented on a PSR-6 pool, invalidation should not apply
     * to deferred items. Instead, they should be committed as usual.
     * This allows replacing old tagged values by new ones without
     * race conditions.
     *
     * @param string[] $tags An array of tags to invalidate
     *
     * @return bool True on success
     *
     * @throws InvalidArgumentException When $tags is not valid
     */
    public function invalidateTags(array $tags);
}
