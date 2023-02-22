<?php
namespace Symfony\Component\Translation\Exception;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ProviderExceptionInterface extends ExceptionInterface
{
    /*
     * Returns debug info coming from the Symfony\Contracts\HttpClient\ResponseInterface
     */
    public function getDebug(): string;
}
