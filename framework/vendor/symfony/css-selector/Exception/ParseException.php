<?php
namespace Symfony\Component\CssSelector\Exception;

/**
 * ParseException is thrown when a CSS selector syntax is not valid.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ParseException extends \Exception implements ExceptionInterface
{
}
