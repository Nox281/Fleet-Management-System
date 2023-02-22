<?php
namespace Symfony\Component\Cache\Adapter;

use Symfony\Component\Cache\Marshaller\MarshallerInterface;
use Symfony\Component\Cache\Traits\RedisClusterProxy;
use Symfony\Component\Cache\Traits\RedisProxy;
use Symfony\Component\Cache\Traits\RedisTrait;

class RedisAdapter extends AbstractAdapter
{
    use RedisTrait;

    /**
     * @param \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface|RedisProxy|RedisClusterProxy $redis           The redis client
     * @param string                                                                                $namespace       The default namespace
     * @param int                                                                                   $defaultLifetime The default lifetime
     */
    public function __construct($redis, string $namespace = '', int $defaultLifetime = 0, MarshallerInterface $marshaller = null)
    {
        $this->init($redis, $namespace, $defaultLifetime, $marshaller);
    }
}
