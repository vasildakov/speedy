<?php declare(strict_types=1);

namespace VasilDakov\Speedy\Service\Client;

use VasilDakov\Speedy\Exception\InvalidArgumentException;
use VasilDakov\Speedy\Exception\ServiceNotCreatedException;
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
     * @param string $json
     * @return GetContractClientsResponse
     * @throws \Throwable
     */
    public function __invoke(string $json): GetContractClientsResponse
    {
        try {
            \json_decode($json, true);

            if (\json_last_error() !== JSON_ERROR_NONE) {
                throw new InvalidArgumentException('Invalid or malformed JSON');
            }

            $serializer = (new SerializerFactory())();
            return $serializer->deserialize($json, GetContractClientsResponse::class, 'json');

        } catch (\Throwable $e) {
            throw $e;
        }
    }
}
