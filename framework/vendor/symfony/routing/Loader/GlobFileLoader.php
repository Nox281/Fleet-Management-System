<?php
namespace Symfony\Component\Routing\Loader;

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Routing\RouteCollection;

/**
 * GlobFileLoader loads files from a glob pattern.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GlobFileLoader extends FileLoader
{
    /**
     * {@inheritdoc}
     */
    public function load($resource, string $type = null)
    {
        $collection = new RouteCollection();

        foreach ($this->glob($resource, false, $globResource) as $path => $info) {
            $collection->addCollection($this->import($path));
        }

        $collection->addResource($globResource);

        return $collection;
    }

    /**
     * {@inheritdoc}
     */
    public function supports($resource, string $type = null)
    {
        return 'glob' === $type;
    }
}
