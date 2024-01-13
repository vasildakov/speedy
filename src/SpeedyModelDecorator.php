<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use JMS\Serializer\SerializerInterface;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Calculation\CalculationResponse;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeResponse;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Location\Street\FindStreetResponse;
use VasilDakov\Speedy\Service\Printing\PrintRequest;
use VasilDakov\Speedy\Service\Printing\PrintResponse;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Service\DestinationServicesResponse;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Service\Track\TrackRequest;
use VasilDakov\Speedy\Service\Track\TrackResponse;

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

    public function findSite(FindSiteRequest $req): FindSiteResponse
    {
        $json = $this->speedy->findSite($req);

        /** @var FindSiteResponse $response */
        $response = $this->deserialize(json: $json, type: FindSiteResponse::class);

        return $response;
    }

    public function findOffice(FindOfficeRequest $req): FindOfficeResponse
    {
        $json = $this->speedy->findOffice($req);

        /** @var FindOfficeResponse $response */
        $response = $this->deserialize(json: $json, type: FindOfficeResponse::class);

        return $response;
    }

    public function findComplex(FindComplexRequest $req): FindComplexResponse
    {
        $json = $this->speedy->findComplex($req);

        /** @var FindComplexResponse $response */
        $response = $this->deserialize(json: $json, type: FindComplexResponse::class);

        return $response;
    }

    public function findStreet(FindStreetRequest $req): FindStreetResponse
    {
        $json = $this->speedy->findStreet($req);

        /** @var FindStreetResponse $response */
        $response = $this->deserialize(json: $json, type: FindStreetResponse::class);

        return $response;
    }

    public function createShipment(CreateShipmentRequest $req): CreateShipmentResponse
    {
        $json = $this->speedy->createShipment($req);

        /** @var CreateShipmentResponse $response */
        $response = $this->deserialize(json: $json, type: CreateShipmentResponse::class);

        return $response;
    }

    public function track(TrackRequest $object): TrackResponse
    {
        $json = $this->speedy->track($object);

        /** @var TrackResponse $response */
        $response = $this->deserialize(json: $json, type: TrackResponse::class);

        return $response;
    }

    public function calculate(CalculationRequest $object): CalculationResponse
    {
        $json = $this->speedy->calculate($object);

        /** @var CalculationResponse $response */
        $response = $this->deserialize(json: $json, type: CalculationResponse::class);

        return $response;
    }

    public function print(PrintRequest $object): PrintResponse
    {
        return new PrintResponse();
    }

    public function destination(DestinationServicesRequest $object): DestinationServicesResponse
    {
        $json = $this->speedy->destination($object);

        /** @var DestinationServicesResponse $response */
        $response = $this->deserialize(json: $json, type: DestinationServicesResponse::class);

        return $response;
    }
}
