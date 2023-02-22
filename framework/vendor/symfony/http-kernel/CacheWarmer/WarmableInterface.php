<?php
namespace Symfony\Component\HttpKernel\CacheWarmer;

/**
 * Interface for classes that support warming their cache.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface WarmableInterface
{
    /**
     * Warms up the cache.
     *
     * @return string[] A list of classes or files to preload on PHP 7.4+
     */
    public function warmUp(string $cacheDir);
}
