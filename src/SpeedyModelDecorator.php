<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use JMS\Serializer\SerializerInterface;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Printing\PrintRequest;
use VasilDakov\Speedy\Service\Printing\PrintResponse;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Track\TrackRequest;

final class SpeedyModelDecorator implements SpeedyInterface
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

    public function findCountry(FindCountryRequest $req): FindCountryResponse
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

    public function findSite(FindSiteRequest $req): string|object
    {
        // TODO: Implement findSite() method.
    }

    public function findOffice(FindOfficeRequest $req): string|object
    {
        // TODO: Implement findOffice() method.
    }

    public function findComplex(FindComplexRequest $req): string|object
    {
        // TODO: Implement findComplex() method.
    }

    public function findStreet(FindStreetRequest $req): string|object
    {
        // TODO: Implement findStreet() method.
    }

    public function createShipment(CreateShipmentRequest $req): string|object
    {
        // TODO: Implement createShipment() method.
    }

    public function track(TrackRequest $object): string|object
    {
        // TODO: Implement track() method.
    }

    public function calculate(CalculationRequest $object): string|object
    {
        // TODO: Implement calculate() method.
    }

    public function print(PrintRequest $object): PrintResponse
    {
        return new PrintResponse();
    }

    public function destination(DestinationServicesRequest $object): string|object
    {
        // TODO: Implement destination() method.
    }
}
