<?php
namespace Symfony\Component\OptionsResolver\Exception;

use Symfony\Component\OptionsResolver\Debug\OptionsResolverIntrospector;

/**
 * Thrown when trying to introspect an option definition property
 * for which no value was configured inside the OptionsResolver instance.
 *
 * @see OptionsResolverIntrospector
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class NoConfigurationException extends \RuntimeException implements ExceptionInterface
{
}
