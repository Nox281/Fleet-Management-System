<?php
namespace Symfony\Component\CssSelector\XPath\Extension;

/**
 * XPath expression translator extension interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
interface ExtensionInterface
{
    /**
     * Returns node translators.
     *
     * These callables will receive the node as first argument and the translator as second argument.
     *
     * @return callable[]
     */
    public function getNodeTranslators(): array;

    /**
     * Returns combination translators.
     *
     * @return callable[]
     */
    public function getCombinationTranslators(): array;

    /**
     * Returns function translators.
     *
     * @return callable[]
     */
    public function getFunctionTranslators(): array;

    /**
     * Returns pseudo-class translators.
     *
     * @return callable[]
     */
    public function getPseudoClassTranslators(): array;

    /**
     * Returns attribute operation translators.
     *
     * @return callable[]
     */
    public function getAttributeMatchingTranslators(): array;

    /**
     * Returns extension name.
     */
    public function getName(): string;
}
