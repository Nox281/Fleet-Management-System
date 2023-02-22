<?php
namespace Symfony\Component\HttpFoundation\Session;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
interface SessionFactoryInterface
{
    public function createSession(): SessionInterface;
}
