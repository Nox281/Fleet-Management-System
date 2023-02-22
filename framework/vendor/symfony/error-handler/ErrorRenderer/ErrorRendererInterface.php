<?php
namespace Symfony\Component\ErrorHandler\ErrorRenderer;

use Symfony\Component\ErrorHandler\Exception\FlattenException;

/**
 * Formats an exception to be used as response content.
 *
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
interface ErrorRendererInterface
{
    /**
     * Renders a Throwable as a FlattenException.
     */
    public function render(\Throwable $exception): FlattenException;
}
