<?php
namespace Symfony\Component\HttpFoundation\Exception;

/**
 * Thrown by Request::toArray() when the content cannot be JSON-decoded.
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 */
final class JsonException extends \UnexpectedValueException implements RequestExceptionInterface
{
}
