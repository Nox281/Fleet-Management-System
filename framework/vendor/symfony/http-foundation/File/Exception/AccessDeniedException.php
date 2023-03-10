<?php
namespace Symfony\Component\HttpFoundation\File\Exception;

/**
 * Thrown when the access on a file was denied.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class AccessDeniedException extends FileException
{
    public function __construct(string $path)
    {
        parent::__construct(sprintf('The file %s could not be accessed', $path));
    }
}
