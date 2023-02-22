<?php
namespace Symfony\Component\CssSelector\XPath;

use Symfony\Component\CssSelector\Node\SelectorNode;

/**
 * XPath expression translator interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface TranslatorInterface
{
    /**
     * Translates a CSS selector to an XPath expression.
     */
    public function cssToXPath(string $cssExpr, string $prefix = 'descendant-or-self::'): string;

    /**
     * Translates a parsed selector node to an XPath expression.
     */
    public function selectorToXPath(SelectorNode $selector, string $prefix = 'descendant-or-self::'): string;
}
