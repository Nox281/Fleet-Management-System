<?php
namespace Symfony\Component\HttpKernel\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * An ArgumentResolverInterface instance knows how to determine the
 * arguments for a specific action.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ArgumentResolverInterface
{
    /**
     * Returns the arguments to pass to the controller.
     *
     * @return array
     *
     * @throws \RuntimeException When no value could be provided for a required argument
     */
    public function getArguments(Request $request, callable $controller);
}
