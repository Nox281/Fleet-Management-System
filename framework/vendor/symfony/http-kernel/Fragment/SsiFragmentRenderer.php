<?php
namespace Symfony\Component\HttpKernel\Fragment;

/**
 * Implements the SSI rendering strategy.
 *
 * @author Sebastian Krebs <krebs.seb@gmail.com>
 */
class SsiFragmentRenderer extends AbstractSurrogateFragmentRenderer
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ssi';
    }
}
