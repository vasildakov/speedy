<?php

namespace VasilDakov\SpeedyTests;

use Doctrine\Common\Collections\ArrayCollection;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Enum\OfficeType;
use VasilDakov\Speedy\Model\Complex;
use VasilDakov\Speedy\Model\Office;
use VasilDakov\Speedy\Model\Site;
use VasilDakov\Speedy\Model\Street;
use VasilDakov\Speedy\Serializer\SerializerFactory;
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
use VasilDakov\Speedy\Speedy;

/**
 * @author Vasil Dakov <vasildakov@gmail.com>
 */
final class SpeedyFunctionalTest extends TestCase
{
    private Speedy $speedy;

    private SerializerInterface $serializer;

    protected function setUp(): void
    {
        parent::setUp();

        $this->serializer = (new SerializerFactory())();

        $this->speedy = new Speedy(
            new Configuration(
                $_ENV['SPEEDY_USERNAME'],
                $_ENV['SPEEDY_PASSWORD'],
                $_ENV['SPEEDY_LANGUAGE']
            ),
            new Client(),
            new HttpFactory()
        );
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#GetContractClientsRequest
     */
    public function testItCanProcessGetContractClient(): void
    {
        $request = new GetContractClientsRequest(clientSystemId: null);

        $json = $this->speedy->getContractClient($request);

        /** @var GetContractClientsResponse $response */
        $response = $this->serializer->deserialize($json, GetContractClientsResponse::class, 'json');

        self::assertCount(4, $response->getClients());
        self::assertEquals(9999999998000, $response->getClients()->first()->getClientId());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindCountryRequest
     */
    public function testItCanFindCountryByFullCountryName(): void
    {
        $request = new FindCountryRequest(name: "Bulgaria", isoAlpha2: null, isoAlpha3: null);

        $json = $this->speedy->findCountry($request);

        /** @var FindCountryResponse $response */
        $response = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        $country = $response->getCountries()->first();

        self::assertCount(1, $response->getCountries());
        self::assertEquals("BULGARIA", $country->getName());
        self::assertEquals(100, $country->getId());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindCountryRequest
     */
    public function testItCanFindCountryByPartialCountryName(): void
    {
        $request = new FindCountryRequest(name: "Bu", isoAlpha2: null, isoAlpha3: null);

        $json = $this->speedy->findCountry($request);

        /** @var FindCountryResponse $response */
        $response = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        self::assertCount(4, $response->getCountries());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindCountryRequest
     */
    public function testItCanFindCountryByIsoAlpha2(): void
    {
        $request = new FindCountryRequest(name: null, isoAlpha2: "BG", isoAlpha3: null);

        $json = $this->speedy->findCountry($request);

        /** @var FindCountryResponse $response */
        $response = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        self::assertCount(1, $response->getCountries());
        self::assertEquals("BULGARIA", $response->getCountries()->first()->getName());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindCountryRequest
     */
    public function testItCanFindCountryByIsoAlpha3(): void
    {
        $request = new FindCountryRequest(name: null, isoAlpha2: null, isoAlpha3: 'BGR');

        $json = $this->speedy->findCountry($request);

        /** @var FindCountryResponse $response */
        $response = $this->serializer->deserialize($json, FindCountryResponse::class, 'json');

        self::assertCount(1, $response->getCountries());
        self::assertEquals("BULGARIA", $response->getCountries()->first()->getName());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindStateRequest
     */
    public function testItCanFindStateByCountryAndFullStateName(): void
    {
        $request = new FindStateRequest(countryId: 840, name: "Washington");

        $json = $this->speedy->findState($request);

        /** @var FindStateResponse $response */
        $response = $this->serializer->deserialize($json, FindStateResponse::class, 'json');

        self::assertCount(1, $response->getStates());
        self::assertEquals("WASHINGTON", $response->getStates()->first()->getName());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindStateRequest
     */
    public function testItCanFindStateByCountryAndPartialStateName(): void
    {
        $request = new FindStateRequest(countryId: 840, name: "Ne");

        $json = $this->speedy->findState($request);

        /** @var FindStateResponse $response */
        $response = $this->serializer->deserialize($json, FindStateResponse::class, 'json');

        self::assertCount(6, $response->getStates());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindSiteRequest
     */
    public function testItCanFindSiteByFullSiteName(): void
    {
        $request = new FindSiteRequest(countryId: 100, name: 'Sofia');

        $json = $this->speedy->findSite($request);

        /** @var FindSiteResponse $response */
        $response = $this->serializer->deserialize($json, FindSiteResponse::class, 'json');

        $site = $response->getSites()->first();

        self::assertInstanceOf(FindSiteResponse::class, $response);
        self::assertInstanceOf(Site::class, $site);
        self::assertEquals(68134, $site->getId());
        self::assertEquals(1000, $site->getPostCode());
        self::assertEquals('SOFIA', $site->getNameEn());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindSiteRequest
     */
    public function testItCanFindSiteByPartialSiteName(): void
    {
        $request = new FindSiteRequest(countryId: 100, name: 'Sa');

        $json = $this->speedy->findSite($request);

        /** @var FindSiteResponse $response */
        $response = $this->serializer->deserialize($json, FindSiteResponse::class, 'json');

        self::assertCount(10, $response->getSites());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindSiteRequest
     */
    public function testItCanFindSiteBySiteNameAndRegion(): void
    {
        $request = new FindSiteRequest(countryId: 100, name: 'KOSTENETS');
        $request->setType('gr.');
        $request->setRegion('SOFIA');

        $json = $this->speedy->findSite($request);

        /** @var FindSiteResponse $response */
        $response = $this->serializer->deserialize($json, FindSiteResponse::class, 'json');

        self::assertInstanceOf(FindSiteResponse::class, $response);
        self::assertInstanceOf(Site::class, $response->getSites()->first());
    }



    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindSiteRequest
     */
    public function testItCanFindSiteByPartialSiteNameAndPostcode(): void
    {
        $request = new FindSiteRequest(countryId: 100, name: 'Sandanski', postCode: 2800);

        $json = $this->speedy->findSite($request);

        /** @var FindSiteResponse $response */
        $response = $this->serializer->deserialize($json, FindSiteResponse::class, 'json');

        self::assertCount(1, $response->getSites());
        self::assertInstanceOf(Site::class, $response->getSites()->first());
        self::assertEquals('SANDANSKI', $response->getSites()->first()->getNameEn());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindStreetRequest
     */
    public function testItCanFindStreetByPartialStreetName(): void
    {
        $request = new FindStreetRequest(siteId: 68134, name: 'USTA');

        $json = $this->speedy->findStreet($request);

        /** @var FindStreetResponse $response */
        $response = $this->serializer->deserialize($json, FindStreetResponse::class, 'json');

        self::assertInstanceOf(FindStreetResponse::class, $response);
        self::assertCount(2, $response->getStreets());
        self::assertInstanceOf(Street::class, $response->getStreets()->first());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindStreetRequest
     */
    public function testItCanFindStreetByFullStreetName(): void
    {
        $request = new FindStreetRequest(siteId: 68134, name: 'VASIL LEVSKI');

        $json = $this->speedy->findStreet($request);

        /** @var FindStreetResponse $response */
        $response = $this->serializer->deserialize($json, FindStreetResponse::class, 'json');

        self::assertInstanceOf(FindStreetResponse::class, $response);
        self::assertCount(3, $response->getStreets());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindStreetRequest
     */
    public function testItCanFindStreetByFullStreetNameAndType(): void
    {
        $request = new FindStreetRequest(siteId: 68134, name: 'VASIL LEVSKI', type: 'bul.');

        $json = $this->speedy->findStreet($request);

        /** @var FindStreetResponse $response */
        $response = $this->serializer->deserialize($json, FindStreetResponse::class, 'json');

        self::assertInstanceOf(FindStreetResponse::class, $response);
        self::assertCount(1, $response->getStreets());
        self::assertInstanceOf(Street::class, $response->getStreets()->first());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindOfficeRequest
     */
    public function testItCanFindOfficeByCountry(): void
    {
        $request = new FindOfficeRequest(countryId: 100);

        $json = $this->speedy->findOffice($request);

        /** @var FindOfficeResponse $response */
        $response = $this->serializer->deserialize($json, FindOfficeResponse::class, 'json');

        self::assertInstanceOf(FindOfficeResponse::class, $response);
        self::assertInstanceOf(Office::class, $response->getOffices()->first());
    }

    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindOfficeRequest
     */
    public function testItCanFindOfficeByCountryAndSite(): void
    {
        $request = new FindOfficeRequest(countryId: 100, siteId: 68134); // Sofia

        $json = $this->speedy->findOffice($request);

        /** @var FindOfficeResponse $response */
        $response = $this->serializer->deserialize($json, FindOfficeResponse::class, 'json');

        self::assertInstanceOf(FindOfficeResponse::class, $response);
        self::assertInstanceOf(Office::class, $response->getOffices()->first());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindOfficeRequest
     */
    public function testItCanFindOfficeByCountryAndSiteAndName(): void
    {
        $request = new FindOfficeRequest(countryId: 100, siteId: 68134, name: 'SOM'); // Sofia

        $json = $this->speedy->findOffice($request);

        /** @var FindOfficeResponse $response */
        $response = $this->serializer->deserialize($json, FindOfficeResponse::class, 'json');

        self::assertInstanceOf(FindOfficeResponse::class, $response);
        self::assertInstanceOf(Office::class, $response->getOffices()->first());
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindOfficeRequest
     */
    public function testItCanFilterOfficesByType(): void
    {
        $request = new FindOfficeRequest(countryId: 100, siteId: 68134); // Sofia

        $json = $this->speedy->findOffice($request);

        /** @var FindOfficeResponse $response */
        $response = $this->serializer->deserialize($json, FindOfficeResponse::class, 'json');

        self::assertInstanceOf(FindOfficeResponse::class, $response);
        self::assertInstanceOf(ArrayCollection::class, $response->getOffices(OfficeType::Office->value));
        self::assertInstanceOf(ArrayCollection::class, $response->getOffices(OfficeType::Apt->value));
    }


    /**
     * @group functional
     * @see https://services.speedy.bg/api/api_examples.html#FindComplexRequest
     */
    public function testItCanFindComplexByPartialName(): void
    {
        $request = new FindComplexRequest(siteId: 68134, name: 'KRASN'); // Sofia

        $json = $this->speedy->findComplex($request);

        /** @var FindOfficeResponse $response */
        $response = $this->serializer->deserialize($json, FindComplexResponse::class, 'json');

        self::assertInstanceOf(FindComplexResponse::class, $response);
        self::assertInstanceOf(Complex::class, $response->getComplexes()->first());
    }
}
