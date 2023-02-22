<?php
namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends DataCollector
{
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        // all collecting is done client side
    }

    public function reset()
    {
        // all collecting is done client side
    }

    public function getName(): string
    {
        return 'ajax';
    }
}
