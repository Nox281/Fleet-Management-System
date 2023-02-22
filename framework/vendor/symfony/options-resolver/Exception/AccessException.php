<?php
namespace Symfony\Component\OptionsResolver\Exception;

/**
 * Thrown when trying to read an option outside of or write it inside of
 * {@link \Symfony\Component\OptionsResolver\Options::resolve()}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AccessException extends \LogicException implements ExceptionInterface
{
}
