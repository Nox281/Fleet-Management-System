<?php
namespace Symfony\Component\OptionsResolver\Exception;

/**
 * Exception thrown when an undefined option is passed.
 *
 * You should remove the options in question from your code or define them
 * beforehand.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class UndefinedOptionsException extends InvalidArgumentException
{
}
