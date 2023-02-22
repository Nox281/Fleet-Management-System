<?php
namespace Symfony\Component\ErrorHandler\Exception;

/**
 * Data Object that represents a Silenced Error.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class SilencedErrorContext implements \JsonSerializable
{
    public $count = 1;

    private $severity;
    private $file;
    private $line;
    private $trace;

    public function __construct(int $severity, string $file, int $line, array $trace = [], int $count = 1)
    {
        $this->severity = $severity;
        $this->file = $file;
        $this->line = $line;
        $this->trace = $trace;
        $this->count = $count;
    }

    public function getSeverity(): int
    {
        return $this->severity;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    public function getLine(): int
    {
        return $this->line;
    }

    public function getTrace(): array
    {
        return $this->trace;
    }

    public function jsonSerialize(): array
    {
        return [
            'severity' => $this->severity,
            'file' => $this->file,
            'line' => $this->line,
            'trace' => $this->trace,
            'count' => $this->count,
        ];
    }
}
