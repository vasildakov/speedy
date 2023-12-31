<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use JMS\Serializer\SerializerInterface;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;

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
        $response = $this->serializer->deserialize(
            data: $json,
            type: GetContractClientsResponse::class,
            format: 'json'
        );

        return $response;
    }
}
