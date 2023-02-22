<?php
namespace Symfony\Component\Mime;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface BodyRendererInterface
{
    public function render(Message $message): void;
}
