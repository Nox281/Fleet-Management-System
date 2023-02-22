<?php
namespace Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Yields the default value defined in the action signature when no value has been given.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class DefaultValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return $argument->hasDefaultValue() || (null !== $argument->getType() && $argument->isNullable() && !$argument->isVariadic());
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        yield $argument->hasDefaultValue() ? $argument->getDefaultValue() : null;
    }
}
