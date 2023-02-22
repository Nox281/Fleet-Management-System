<?php
namespace Symfony\Component\HttpFoundation\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\HttpFoundation\Response;

final class ResponseIsUnprocessable extends Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'is unprocessable';
    }

    /**
     * @param Response $other
     *
     * {@inheritdoc}
     */
    protected function matches($other): bool
    {
        return Response::HTTP_UNPROCESSABLE_ENTITY === $other->getStatusCode();
    }

    /**
     * @param Response $other
     *
     * {@inheritdoc}
     */
    protected function failureDescription($other): string
    {
        return 'the Response '.$this->toString();
    }

    /**
     * @param Response $other
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription($other): string
    {
        return (string) $other;
    }
}
