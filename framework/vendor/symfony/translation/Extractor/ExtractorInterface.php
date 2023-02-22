<?php
namespace Symfony\Component\Translation\Extractor;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * Extracts translation messages from a directory or files to the catalogue.
 * New found messages are injected to the catalogue using the prefix.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
interface ExtractorInterface
{
    /**
     * Extracts translation messages from files, a file or a directory to the catalogue.
     *
     * @param string|iterable<string> $resource Files, a file or a directory
     */
    public function extract($resource, MessageCatalogue $catalogue);

    /**
     * Sets the prefix that should be used for new found messages.
     */
    public function setPrefix(string $prefix);
}
