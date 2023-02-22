<?php
namespace Symfony\Component\Console\Command;

/**
 * Interface for command reacting to signal.
 *
 * @author Grégoire Pineau <lyrixx@lyrix.info>
 */
interface SignalableCommandInterface
{
    /**
     * Returns the list of signals to subscribe.
     */
    public function getSubscribedSignals(): array;

    /**
     * The method will be called when the application is signaled.
     */
    public function handleSignal(int $signal): void;
}
