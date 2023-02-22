<?php
namespace Symfony\Component\CssSelector\Node;

/**
 * Interface for nodes.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface NodeInterface
{
    public function getNodeName(): string;

    public function getSpecificity(): Specificity;

    public function __toString(): string;
}
