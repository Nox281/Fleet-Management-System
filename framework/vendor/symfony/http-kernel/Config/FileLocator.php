<?php
namespace Symfony\Component\HttpKernel\Config;

use Symfony\Component\Config\FileLocator as BaseFileLocator;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * FileLocator uses the KernelInterface to locate resources in bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLocator extends BaseFileLocator
{
    private $kernel;

    public function __construct(KernelInterface $kernel)
    {
        $this->kernel = $kernel;

        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function locate(string $file, string $currentPath = null, bool $first = true)
    {
        if (isset($file[0]) && '@' === $file[0]) {
            $resource = $this->kernel->locateResource($file);

            return $first ? $resource : [$resource];
        }

        return parent::locate($file, $currentPath, $first);
    }
}
