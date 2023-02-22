<?php
namespace Symfony\Component\HttpKernel\Fragment;

/**
 * Implements the ESI rendering strategy.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class EsiFragmentRenderer extends AbstractSurrogateFragmentRenderer
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'esi';
    }
}
