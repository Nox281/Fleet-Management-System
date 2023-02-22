<?php
namespace Symfony\Component\HttpKernel\Exception;

/**
 * Interface for HTTP error exceptions.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
interface HttpExceptionInterface extends \Throwable
{
    /**
     * Returns the status code.
     *
     * @return int
     */
    public function getStatusCode();

    /**
     * Returns response headers.
     *
     * @return array
     */
    public function getHeaders();
}
