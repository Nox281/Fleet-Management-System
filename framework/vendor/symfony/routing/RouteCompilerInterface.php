<?php
namespace Symfony\Component\Routing;

/**
 * RouteCompilerInterface is the interface that all RouteCompiler classes must implement.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RouteCompilerInterface
{
    /**
     * Compiles the current route instance.
     *
     * @return CompiledRoute
     *
     * @throws \LogicException If the Route cannot be compiled because the
     *                         path or host pattern is invalid
     */
    public static function compile(Route $route);
}
