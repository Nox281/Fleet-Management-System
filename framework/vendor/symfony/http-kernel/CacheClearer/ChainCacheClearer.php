<?php
namespace Symfony\Component\HttpKernel\CacheClearer;

/**
 * ChainCacheClearer.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 *
 * @final
 */
class ChainCacheClearer implements CacheClearerInterface
{
    private $clearers;

    /**
     * @param iterable<mixed, CacheClearerInterface> $clearers
     */
    public function __construct(iterable $clearers = [])
    {
        $this->clearers = $clearers;
    }

    /**
     * {@inheritdoc}
     */
    public function clear(string $cacheDir)
    {
        foreach ($this->clearers as $clearer) {
            $clearer->clear($cacheDir);
        }
    }
}
