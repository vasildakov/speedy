<?php

namespace VasilDakov\Speedy;

use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeResponse;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateResponse;

interface SpeedyInterface
{
    public function getContractClient(GetContractClientsRequest $request): GetContractClientsResponse;

    public function findCountry(FindCountryRequest $request): FindCountryResponse;

    public function findState(FindStateRequest $request): FindStateResponse;

    public function findSite(FindSiteRequest $request): FindSiteResponse;

    public function findOffice(FindOfficeRequest $request): FindOfficeResponse;

}
