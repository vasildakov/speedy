<?php

namespace VasilDakov\SpeedyTests;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\HttpFactory;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;
use VasilDakov\Speedy\Configuration;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexResponse;
use VasilDakov\Speedy\Service\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Service\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Speedy;

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
}
