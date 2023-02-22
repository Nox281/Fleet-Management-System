<?php
namespace Symfony\Component\HttpKernel\ControllerMetadata;

/**
 * Builds method argument data.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
interface ArgumentMetadataFactoryInterface
{
    /**
     * @param string|object|array $controller The controller to resolve the arguments for
     *
     * @return ArgumentMetadata[]
     */
    public function createArgumentMetadata($controller);
}
