<?php
namespace Symfony\Contracts\Translation;

interface LocaleAwareInterface
{
    /**
     * Sets the current locale.
     *
     * @param string $locale The locale
     *
     * @throws \InvalidArgumentException If the locale contains invalid characters
     */
    public function setLocale(string $locale);

    /**
     * Returns the current locale.
     *
     * @return string
     */
    public function getLocale();
}
