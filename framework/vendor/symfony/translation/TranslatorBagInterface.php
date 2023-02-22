<?php
namespace Symfony\Component\Translation;

use Symfony\Component\Translation\Exception\InvalidArgumentException;

/**
 * TranslatorBagInterface.
 *
 * @method MessageCatalogueInterface[] getCatalogues() Returns all catalogues of the instance
 *
 * @author Abdellatif Ait boudad <a.aitboudad@gmail.com>
 */
interface TranslatorBagInterface
{
    /**
     * Gets the catalogue by locale.
     *
     * @param string|null $locale The locale or null to use the default
     *
     * @return MessageCatalogueInterface
     *
     * @throws InvalidArgumentException If the locale contains invalid characters
     */
    public function getCatalogue(string $locale = null);
}
