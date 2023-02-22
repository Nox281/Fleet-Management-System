<?php
namespace Symfony\Component\CssSelector\Parser;

use Symfony\Component\CssSelector\Node\SelectorNode;

/**
 * CSS selector parser interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface ParserInterface
{
    /**
     * Parses given selector source into an array of tokens.
     *
     * @return SelectorNode[]
     */
    public function parse(string $source): array;
}
