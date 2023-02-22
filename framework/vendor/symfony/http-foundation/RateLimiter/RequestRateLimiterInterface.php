<?php
namespace Symfony\Component\HttpFoundation\RateLimiter;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\RateLimiter\RateLimit;

/**
 * A special type of limiter that deals with requests.
 *
 * This allows to limit on different types of information
 * from the requests.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
interface RequestRateLimiterInterface
{
    public function consume(Request $request): RateLimit;

    public function reset(Request $request): void;
}
