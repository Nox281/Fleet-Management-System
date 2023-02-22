<?php
namespace Symfony\Component\HttpKernel\Log;

use Symfony\Component\HttpFoundation\Request;

/**
 * DebugLoggerInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DebugLoggerInterface
{
    /**
     * Returns an array of logs.
     *
     * A log is an array with the following mandatory keys:
     * timestamp, message, priority, and priorityName.
     * It can also have an optional context key containing an array.
     *
     * @return array
     */
    public function getLogs(Request $request = null);

    /**
     * Returns the number of errors.
     *
     * @return int
     */
    public function countErrors(Request $request = null);

    /**
     * Removes all log records.
     */
    public function clear();
}
