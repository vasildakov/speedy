<?php

declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use Throwable;
use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Serializer\SerializerFactory;

use function json_decode;
use function json_last_error;

/**
 * Class GetContractResponseFactory
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 * @psalm-suppress UnusedFunctionCall
 */
final class GetContractClientsResponseFactory
{
    /**
     * @param string $json
     * @return GetContractClientsResponse
     * @throws Throwable
     */
    public function __invoke(string $json): GetContractClientsResponse
    {
        json_decode($json, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidArgumentException('Invalid or malformed JSON');
        }

        $serializer = (new SerializerFactory())();

        /** @var GetContractClientsResponse $response */
        $response = $serializer->deserialize($json, GetContractClientsResponse::class, 'json');

        return $response;
    }
}
