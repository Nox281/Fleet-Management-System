<?php
namespace Symfony\Component\String\Slugger;

use Symfony\Component\String\AbstractUnicodeString;

/**
 * Creates a URL-friendly slug from a given string.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
interface SluggerInterface
{
    /**
     * Creates a slug for the given string and locale, using appropriate transliteration when needed.
     */
    public function slug(string $string, string $separator = '-', string $locale = null): AbstractUnicodeString;
}
