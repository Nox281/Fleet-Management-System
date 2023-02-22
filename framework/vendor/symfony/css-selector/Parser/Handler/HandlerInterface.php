<?php
namespace Symfony\Component\CssSelector\Parser\Handler;

use Symfony\Component\CssSelector\Parser\Reader;
use Symfony\Component\CssSelector\Parser\TokenStream;

/**
 * CSS selector handler interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface HandlerInterface
{
    public function handle(Reader $reader, TokenStream $stream): bool;
}
