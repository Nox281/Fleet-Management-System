<?php
namespace Symfony\Component\OptionsResolver\Exception;

/**
 * Thrown when two lazy options have a cyclic dependency.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class OptionDefinitionException extends \LogicException implements ExceptionInterface
{
}
