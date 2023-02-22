<?php
namespace Symfony\Component\Mime\Part\Multipart;

use Symfony\Component\Mime\Part\AbstractMultipartPart;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class AlternativePart extends AbstractMultipartPart
{
    public function getMediaSubtype(): string
    {
        return 'alternative';
    }
}
