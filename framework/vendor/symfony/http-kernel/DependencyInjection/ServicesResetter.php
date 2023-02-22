<?php
namespace Symfony\Component\HttpKernel\DependencyInjection;

use Symfony\Contracts\Service\ResetInterface;

/**
 * Resets provided services.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServicesResetter implements ResetInterface
{
    private $resettableServices;
    private $resetMethods;

    /**
     * @param \Traversable<string, object>   $resettableServices
     * @param array<string, string|string[]> $resetMethods
     */
    public function __construct(\Traversable $resettableServices, array $resetMethods)
    {
        $this->resettableServices = $resettableServices;
        $this->resetMethods = $resetMethods;
    }

    public function reset()
    {
        foreach ($this->resettableServices as $id => $service) {
            foreach ((array) $this->resetMethods[$id] as $resetMethod) {
                if ('?' === $resetMethod[0] && !method_exists($service, $resetMethod = substr($resetMethod, 1))) {
                    continue;
                }

                $service->$resetMethod();
            }
        }
    }
}
