<?php
namespace Symfony\Bridge\PsrHttpMessage;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Creates Symfony Request and Response instances from PSR-7 ones.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface HttpFoundationFactoryInterface
{
    /**
     * Creates a Symfony Request instance from a PSR-7 one.
     *
     * @return Request
     */
    public function createRequest(ServerRequestInterface $psrRequest, bool $streamed = false);

    /**
     * Creates a Symfony Response instance from a PSR-7 one.
     *
     * @return Response
     */
    public function createResponse(ResponseInterface $psrResponse, bool $streamed = false);
}
