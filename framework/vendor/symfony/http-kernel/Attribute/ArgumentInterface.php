<?php
namespace Symfony\Component\HttpKernel\Attribute;

trigger_deprecation('symfony/http-kernel', '5.3', 'The "%s" interface is deprecated.', ArgumentInterface::class);

/**
 * Marker interface for controller argument attributes.
 *
 * @deprecated since Symfony 5.3
 */
interface ArgumentInterface
{
}
