<?php
namespace Symfony\Component\HttpKernel\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Responsible for resolving the value of an argument based on its metadata.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
interface ArgumentValueResolverInterface
{
    /**
     * Whether this resolver can resolve the value for the given ArgumentMetadata.
     *
     * @return bool
     */
    public function supports(Request $request, ArgumentMetadata $argument);

    /**
     * Returns the possible value(s).
     *
     * @return iterable
     */
    public function resolve(Request $request, ArgumentMetadata $argument);
}
