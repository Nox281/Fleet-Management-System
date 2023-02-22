<?php
namespace Symfony\Component\HttpFoundation\Exception;

/**
 * Raised when a user sends a malformed request.
 */
class BadRequestException extends \UnexpectedValueException implements RequestExceptionInterface
{
}
