<?php
namespace Symfony\Component\Routing;

interface RequestContextAwareInterface
{
    /**
     * Sets the request context.
     */
    public function setContext(RequestContext $context);

    /**
     * Gets the request context.
     *
     * @return RequestContext
     */
    public function getContext();
}
