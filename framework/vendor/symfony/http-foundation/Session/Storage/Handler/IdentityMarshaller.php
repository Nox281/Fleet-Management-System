<?php
namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

use Symfony\Component\Cache\Marshaller\MarshallerInterface;

/**
 * @author Ahmed TAILOULOUTE <ahmed.tailouloute@gmail.com>
 */
class IdentityMarshaller implements MarshallerInterface
{
    /**
     * {@inheritdoc}
     */
    public function marshall(array $values, ?array &$failed): array
    {
        foreach ($values as $key => $value) {
            if (!\is_string($value)) {
                throw new \LogicException(sprintf('%s accepts only string as data.', __METHOD__));
            }
        }

        return $values;
    }

    /**
     * {@inheritdoc}
     */
    public function unmarshall(string $value): string
    {
        return $value;
    }
}
