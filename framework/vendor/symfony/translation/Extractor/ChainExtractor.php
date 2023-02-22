<?php
namespace Symfony\Component\Translation\Extractor;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * ChainExtractor extracts translation messages from template files.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
class ChainExtractor implements ExtractorInterface
{
    /**
     * The extractors.
     *
     * @var ExtractorInterface[]
     */
    private $extractors = [];

    /**
     * Adds a loader to the translation extractor.
     */
    public function addExtractor(string $format, ExtractorInterface $extractor)
    {
        $this->extractors[$format] = $extractor;
    }

    /**
     * {@inheritdoc}
     */
    public function setPrefix(string $prefix)
    {
        foreach ($this->extractors as $extractor) {
            $extractor->setPrefix($prefix);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function extract($directory, MessageCatalogue $catalogue)
    {
        foreach ($this->extractors as $extractor) {
            $extractor->extract($directory, $catalogue);
        }
    }
}
