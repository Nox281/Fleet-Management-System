<?php
namespace Symfony\Component\Routing\Matcher;

/**
 * RedirectableUrlMatcherInterface knows how to redirect the user.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RedirectableUrlMatcherInterface
{
    /**
     * Redirects the user to another URL and returns the parameters for the redirection.
     *
     * @param string      $path   The path info to redirect to
     * @param string      $route  The route name that matched
     * @param string|null $scheme The URL scheme (null to keep the current one)
     *
     * @return array
     */
    public function redirect(string $path, string $route, string $scheme = null);
}
