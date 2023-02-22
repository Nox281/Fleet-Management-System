<?php
namespace Symfony\Component\HttpKernel\Attribute;

/**
 * Service tag to autoconfigure controllers.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class AsController
{
    public function __construct()
    {
    }
}
