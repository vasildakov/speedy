<?php

namespace VasilDakov\Speedy;

use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Printing\PrintRequest;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Track\TrackRequest;
use VasilDakov\Speedy\Service\Track\TrackResponse;

interface SpeedyInterface
{
    public function getContractClient(GetContractClientsRequest $req): string|object;

    public function findCountry(FindCountryRequest $req): string|object;

    public function findState(FindStateRequest $req): string|object;

    public function findSite(FindSiteRequest $req): string|object;

    public function findOffice(FindOfficeRequest $req): string|object;

    public function findComplex(FindComplexRequest $req): string|object;

    public function findStreet(FindStreetRequest $req): string|object;

    public function createShipment(CreateShipmentRequest $req): string|object;

    public function track(TrackRequest $object): string|object;

    public function calculate(CalculationRequest $object): string|object;

    public function print(PrintRequest $object): string|object;

    public function destination(DestinationServicesRequest $object): string|object;
}
