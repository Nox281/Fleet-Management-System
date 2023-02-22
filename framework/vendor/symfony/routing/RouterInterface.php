<?php
namespace Symfony\Component\Routing;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\Matcher\UrlMatcherInterface;

/**
 * RouterInterface is the interface that all Router classes must implement.
 *
 * This interface is the concatenation of UrlMatcherInterface and UrlGeneratorInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RouterInterface extends UrlMatcherInterface, UrlGeneratorInterface
{
    /**
     * Gets the RouteCollection instance associated with this Router.
     *
     * WARNING: This method should never be used at runtime as it is SLOW.
     *          You might use it in a cache warmer though.
     *
     * @return RouteCollection
     */
    public function getRouteCollection();
}
