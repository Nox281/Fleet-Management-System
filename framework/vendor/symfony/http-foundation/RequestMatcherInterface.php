<?php
namespace Symfony\Component\HttpFoundation;

/**
 * RequestMatcherInterface is an interface for strategies to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface RequestMatcherInterface
{
    /**
     * Decides whether the rule(s) implemented by the strategy matches the supplied request.
     *
     * @return bool
     */
    public function matches(Request $request);
}
