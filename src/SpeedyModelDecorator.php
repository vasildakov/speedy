<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use JMS\Serializer\SerializerInterface;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;

final class SpeedyModelDecorator
{
    private SpeedyInterface $speedy;

    private SerializerInterface $serializer;

    public function __construct(SpeedyInterface $speedy, SerializerInterface $serializer = null)
    {
        $this->speedy = $speedy;

        if (null === $serializer) {
            $serializer = (new SerializerFactory())();
        }
        $this->serializer = $serializer;
    }

    public function getContractClient(GetContractClientsRequest $req): GetContractClientsResponse
    {
        $json = $this->speedy->getContractClient($req);

        /** @var GetContractClientsResponse $response */
        $response = $this->deserialize($json, GetContractClientsResponse::class);

        return $response;
    }

    public function findCountry(FindCountryRequest $req): GetContractClientsResponse
    {
        $json = $this->speedy->findCountry($req);

        /** @var GetContractClientsResponse $response */
        $response = $this->deserialize(json: $json, type: FindCountryResponse::class);

        return $response;
    }

    public function findState(FindStateRequest $req): FindStateResponse
    {
        $json = $this->speedy->findState($req);

        /** @var FindStateResponse $response */
        $response = $this->deserialize(json: $json, type: FindStateResponse::class);

        return $response;
    }

    private function deserialize(string $json, string $type): object
    {
        return $this->serializer->deserialize(
            data: $json,
            type: $type,
            format: 'json'
        );
    }
}
