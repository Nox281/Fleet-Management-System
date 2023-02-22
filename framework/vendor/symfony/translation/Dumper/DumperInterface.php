<?php
namespace Symfony\Component\Translation\Dumper;

use Symfony\Component\Translation\MessageCatalogue;

/**
 * DumperInterface is the interface implemented by all translation dumpers.
 * There is no common option.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
interface DumperInterface
{
    /**
     * Dumps the message catalogue.
     *
     * @param array $options Options that are used by the dumper
     */
    public function dump(MessageCatalogue $messages, array $options = []);
}
