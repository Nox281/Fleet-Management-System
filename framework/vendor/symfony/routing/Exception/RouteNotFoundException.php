<?php
namespace Symfony\Component\Routing\Exception;

/**
 * Exception thrown when a route does not exist.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class RouteNotFoundException extends \InvalidArgumentException implements ExceptionInterface
{
}
