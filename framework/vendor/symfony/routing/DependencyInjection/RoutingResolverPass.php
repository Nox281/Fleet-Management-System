<?php
namespace Symfony\Component\Routing\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Adds tagged routing.loader services to routing.resolver service.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class RoutingResolverPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private $resolverServiceId;
    private $loaderTag;

    public function __construct(string $resolverServiceId = 'routing.resolver', string $loaderTag = 'routing.loader')
    {
        if (0 < \func_num_args()) {
            trigger_deprecation('symfony/routing', '5.3', 'Configuring "%s" is deprecated.', __CLASS__);
        }

        $this->resolverServiceId = $resolverServiceId;
        $this->loaderTag = $loaderTag;
    }

    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition($this->resolverServiceId)) {
            return;
        }

        $definition = $container->getDefinition($this->resolverServiceId);

        foreach ($this->findAndSortTaggedServices($this->loaderTag, $container) as $id) {
            $definition->addMethodCall('addLoader', [new Reference($id)]);
        }
    }
}
