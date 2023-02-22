<?php
namespace Symfony\Component\Routing\Exception;

/**
 * The resource was not found.
 *
 * This exception should trigger an HTTP 404 response in your application code.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class ResourceNotFoundException extends \RuntimeException implements ExceptionInterface
{
}
