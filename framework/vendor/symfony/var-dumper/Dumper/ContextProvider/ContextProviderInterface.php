<?php
namespace Symfony\Component\VarDumper\Dumper\ContextProvider;

/**
 * Interface to provide contextual data about dump data clones sent to a server.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
interface ContextProviderInterface
{
    public function getContext(): ?array;
}
