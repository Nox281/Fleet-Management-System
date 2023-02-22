<?php
namespace Symfony\Component\HttpKernel\Bundle;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

/**
 * BundleInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface BundleInterface extends ContainerAwareInterface
{
    /**
     * Boots the Bundle.
     */
    public function boot();

    /**
     * Shutdowns the Bundle.
     */
    public function shutdown();

    /**
     * Builds the bundle.
     *
     * It is only ever called once when the cache is empty.
     */
    public function build(ContainerBuilder $container);

    /**
     * Returns the container extension that should be implicitly loaded.
     *
     * @return ExtensionInterface|null
     */
    public function getContainerExtension();

    /**
     * Returns the bundle name (the class short name).
     *
     * @return string
     */
    public function getName();

    /**
     * Gets the Bundle namespace.
     *
     * @return string
     */
    public function getNamespace();

    /**
     * Gets the Bundle directory path.
     *
     * The path should always be returned as a Unix path (with /).
     *
     * @return string
     */
    public function getPath();
}
