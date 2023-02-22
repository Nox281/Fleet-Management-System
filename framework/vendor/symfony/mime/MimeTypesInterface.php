<?php
namespace Symfony\Component\Mime;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface MimeTypesInterface extends MimeTypeGuesserInterface
{
    /**
     * Gets the extensions for the given MIME type in decreasing order of preference.
     *
     * @return string[]
     */
    public function getExtensions(string $mimeType): array;

    /**
     * Gets the MIME types for the given extension in decreasing order of preference.
     *
     * @return string[]
     */
    public function getMimeTypes(string $ext): array;
}
