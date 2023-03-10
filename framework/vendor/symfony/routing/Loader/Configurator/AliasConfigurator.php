<?php
namespace Symfony\Component\Routing\Loader\Configurator;

use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\Routing\Alias;

class AliasConfigurator
{
    private $alias;

    public function __construct(Alias $alias)
    {
        $this->alias = $alias;
    }

    /**
     * Whether this alias is deprecated, that means it should not be called anymore.
     *
     * @param string $package The name of the composer package that is triggering the deprecation
     * @param string $version The version of the package that introduced the deprecation
     * @param string $message The deprecation message to use
     *
     * @return $this
     *
     * @throws InvalidArgumentException when the message template is invalid
     */
    public function deprecate(string $package, string $version, string $message): self
    {
        $this->alias->setDeprecated($package, $version, $message);

        return $this;
    }
}
