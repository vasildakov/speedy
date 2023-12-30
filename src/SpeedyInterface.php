<?php

namespace VasilDakov\Speedy;

use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;

interface SpeedyInterface
{
    public function getContractClient(GetContractClientsRequest $req): string;

    public function findCountry(FindCountryRequest $req): string;

    public function findState(FindStateRequest $req): string;

    public function findSite(FindSiteRequest $req): string;

    public function findOffice(FindOfficeRequest $req): string;

    public function findComplex(FindComplexRequest $req): string;

    public function findStreet(FindStreetRequest $req): string;

    public function createShipment(CreateShipmentRequest $req): string;

}
