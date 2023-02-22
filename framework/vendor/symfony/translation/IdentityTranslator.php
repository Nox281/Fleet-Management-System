<?php
namespace Symfony\Component\Translation;

use Symfony\Contracts\Translation\LocaleAwareInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Contracts\Translation\TranslatorTrait;

/**
 * IdentityTranslator does not translate anything.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class IdentityTranslator implements TranslatorInterface, LocaleAwareInterface
{
    use TranslatorTrait;
}
