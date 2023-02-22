<?php
namespace Symfony\Component\Translation\Provider;

use Symfony\Component\Translation\Exception\UnsupportedSchemeException;

/**
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
 */
class TranslationProviderCollectionFactory
{
    private $factories;
    private $enabledLocales;

    /**
     * @param iterable<mixed, ProviderFactoryInterface> $factories
     */
    public function __construct(iterable $factories, array $enabledLocales)
    {
        $this->factories = $factories;
        $this->enabledLocales = $enabledLocales;
    }

    public function fromConfig(array $config): TranslationProviderCollection
    {
        $providers = [];
        foreach ($config as $name => $currentConfig) {
            $providers[$name] = $this->fromDsnObject(
                new Dsn($currentConfig['dsn']),
                !$currentConfig['locales'] ? $this->enabledLocales : $currentConfig['locales'],
                !$currentConfig['domains'] ? [] : $currentConfig['domains']
            );
        }

        return new TranslationProviderCollection($providers);
    }

    public function fromDsnObject(Dsn $dsn, array $locales, array $domains = []): ProviderInterface
    {
        foreach ($this->factories as $factory) {
            if ($factory->supports($dsn)) {
                return new FilteringProvider($factory->create($dsn), $locales, $domains);
            }
        }

        throw new UnsupportedSchemeException($dsn);
    }
}
