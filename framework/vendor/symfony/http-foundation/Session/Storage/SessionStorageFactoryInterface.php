<?php
namespace Symfony\Component\HttpFoundation\Session\Storage;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
interface SessionStorageFactoryInterface
{
    /**
     * Creates a new instance of SessionStorageInterface.
     */
    public function createStorage(?Request $request): SessionStorageInterface;
}
