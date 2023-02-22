<?php
namespace Symfony\Component\Routing\Generator\Dumper;

use Symfony\Component\Routing\RouteCollection;

/**
 * GeneratorDumperInterface is the interface that all generator dumper classes must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface GeneratorDumperInterface
{
    /**
     * Dumps a set of routes to a string representation of executable code
     * that can then be used to generate a URL of such a route.
     *
     * @return string
     */
    public function dump(array $options = []);

    /**
     * Gets the routes to dump.
     *
     * @return RouteCollection
     */
    public function getRoutes();
}
