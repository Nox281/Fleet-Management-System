<?php
namespace Symfony\Component\ErrorHandler\ErrorRenderer;

use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

// Help opcache.preload discover always-needed symbols
class_exists(CliDumper::class);

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CliErrorRenderer implements ErrorRendererInterface
{
    /**
     * {@inheritdoc}
     */
    public function render(\Throwable $exception): FlattenException
    {
        $cloner = new VarCloner();
        $dumper = new class() extends CliDumper {
            protected function supportsColors(): bool
            {
                $outputStream = $this->outputStream;
                $this->outputStream = fopen('php://stdout', 'w');

                try {
                    return parent::supportsColors();
                } finally {
                    $this->outputStream = $outputStream;
                }
            }
        };

        return FlattenException::createFromThrowable($exception)
            ->setAsString($dumper->dump($cloner->cloneVar($exception), true));
    }
}
