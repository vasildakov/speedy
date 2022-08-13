<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Client;

use Laminas\Hydrator\ReflectionHydrator;
use Laminas\Hydrator\Strategy\HydratorStrategy;
use VasilDakov\Speedy\Serializer\SerializerFactory;

/**
 * Class GetContractResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
final class GetContractClientsResponseFactory
{
    /**
     * @var Client[]
     */
    private array $clients = [];

    /**
     * @param string $json
     * @return GetContractClientsResponse
     */
    public function __invoke(string $json): GetContractClientsResponse
    {
        $array = \json_decode($json, true);

        if (\json_last_error() !== JSON_ERROR_NONE) {
            throw new \InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();
        return $serializer->deserialize($json, GetContractClientsResponse::class, 'json');
    }
}
