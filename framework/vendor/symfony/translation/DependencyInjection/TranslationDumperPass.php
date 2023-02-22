<?php
namespace Symfony\Component\Translation\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Adds tagged translation.formatter services to translation writer.
 */
class TranslationDumperPass implements CompilerPassInterface
{
    private $writerServiceId;
    private $dumperTag;

    public function __construct(string $writerServiceId = 'translation.writer', string $dumperTag = 'translation.dumper')
    {
        if (1 < \func_num_args()) {
            trigger_deprecation('symfony/translation', '5.3', 'Configuring "%s" is deprecated.', __CLASS__);
        }

        $this->writerServiceId = $writerServiceId;
        $this->dumperTag = $dumperTag;
    }

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->writerServiceId)) {
            return;
        }

        $definition = $container->getDefinition($this->writerServiceId);

        foreach ($container->findTaggedServiceIds($this->dumperTag, true) as $id => $attributes) {
            $definition->addMethodCall('addDumper', [$attributes[0]['alias'], new Reference($id)]);
        }
    }
}
