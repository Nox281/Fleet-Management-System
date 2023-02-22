<?php
namespace Symfony\Bridge\PsrHttpMessage\Tests\Fixtures;

use Psr\Http\Message\StreamInterface;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class Stream implements StreamInterface
{
    private $stringContent;
    private $eof = true;

    public function __construct($stringContent = '')
    {
        $this->stringContent = $stringContent;
    }

    public function __toString(): string
    {
        return $this->stringContent;
    }

    public function close(): void
    {
    }

    public function detach()
    {
        return fopen('data://text/plain,'.$this->stringContent, 'r');
    }

    public function getSize(): ?int
    {
        return null;
    }

    public function tell(): int
    {
        return 0;
    }

    public function eof(): bool
    {
        return $this->eof;
    }

    public function isSeekable(): bool
    {
        return true;
    }

    public function seek($offset, $whence = \SEEK_SET): void
    {
    }

    public function rewind(): void
    {
        $this->eof = false;
    }

    public function isWritable(): bool
    {
        return false;
    }

    public function write($string): int
    {
        return \strlen($string);
    }

    public function isReadable(): bool
    {
        return true;
    }

    public function read($length): string
    {
        $this->eof = true;

        return $this->stringContent;
    }

    public function getContents(): string
    {
        return $this->stringContent;
    }

    /**
     * {@inheritdoc}
     *
     * @return mixed
     */
    public function getMetadata($key = null)
    {
        return null;
    }
}
