<?php
namespace Symfony\Component\EventDispatcher\Attribute;

/**
 * Service tag to autoconfigure event listeners.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class AsEventListener
{
    public function __construct(
        public ?string $event = null,
        public ?string $method = null,
        public int $priority = 0,
        public ?string $dispatcher = null,
    ) {
    }
}
