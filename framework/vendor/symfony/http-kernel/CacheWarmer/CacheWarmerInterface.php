<?php
namespace Symfony\Component\HttpKernel\CacheWarmer;

/**
 * Interface for classes able to warm up the cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface CacheWarmerInterface extends WarmableInterface
{
    /**
     * Checks whether this warmer is optional or not.
     *
     * Optional warmers can be ignored on certain conditions.
     *
     * A warmer should return true if the cache can be
     * generated incrementally and on-demand.
     *
     * @return bool
     */
    public function isOptional();
}
