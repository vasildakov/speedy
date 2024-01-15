<?php

declare(strict_types=1);

namespace VasilDakov\Speedy;

use Fig\Http\Message\RequestMethodInterface;
use JMS\Serializer\SerializerInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use VasilDakov\Speedy\Exception\JsonException;
use VasilDakov\Speedy\Serializer\SerializerFactory;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Calculation\CalculationResponse;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Location;
use VasilDakov\Speedy\Service\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Service\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Service\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Service\Location\State\FindStateRequest;
use VasilDakov\Speedy\Service\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Service\Printing\PrintRequest;
use VasilDakov\Speedy\Service\Printing\PrintResponse;
use VasilDakov\Speedy\Service\Service\DestinationServicesRequest;
use VasilDakov\Speedy\Service\Service\DestinationServicesResponse;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentRequest;
use VasilDakov\Speedy\Service\Shipment\CancelShipmentResponse;
use VasilDakov\Speedy\Service\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Service\Track\TrackRequest;
use VasilDakov\Speedy\Service\Track\TrackResponse;

/**
 * Class Speedy.
 *
 * @author    Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 *
 * @version   1.0
 */
final class Speedy implements SpeedyInterface
{
    public const API_URL = 'https://api.speedy.bg/v1';


    private Configuration $configuration;

    /**
     * PSR-18: HTTP Client.
     */
    private ClientInterface $client;

    /**
     * PSR-17: HTTP Factories.
     */
    private RequestFactoryInterface $factory;

    private SerializerInterface $serializer;

    public function __construct(
        Configuration $configuration,
        ClientInterface $client,
        RequestFactoryInterface $factory,
        ?SerializerInterface $serializer = null
    ) {
        $this->configuration = $configuration;
        $this->client = $client;
        $this->factory = $factory;

        if (null === $serializer) {
            $serializer = (new SerializerFactory())();
        }
        $this->serializer = $serializer;
    }

    private function createRequest(string $method, string $uri, array $data): RequestInterface
    {
        $request = $this->factory->createRequest($method, $uri);
        $request = $request->withAddedHeader('Content-Type', 'application/json');
        $request->getBody()->write(\json_encode($data));

        return $request;
    }

    private function createPayload(array $data): array
    {
        $config = $this->configuration->toArray();

        return \array_merge($config, $data);
    }

    /**
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    private function getContents(RequestInterface $request): string
    {
        $response = $this->client->sendRequest($request);

        $json = $response->getBody()->getContents();
        if (false === \json_validate($json)) {
            throw new JsonException(\json_last_error_msg(), \json_last_error());
        }

        return $json;
    }

    /**
     * @throws ClientExceptionInterface|JsonException
     */
    public function getContractClient(GetContractClientsRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/client/contract',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @throws ClientExceptionInterface|JsonException
     */
    public function findCountry(Location\Country\FindCountryRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/country',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @param FindStateRequest $req
     *
     * @return string
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function findState(Location\State\FindStateRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/state',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @param FindSiteRequest $req
     *
     * @return string
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function findSite(Location\Site\FindSiteRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/site',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @param FindOfficeRequest $req
     *
     * @return string
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function findOffice(Location\Office\FindOfficeRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/office',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @param FindComplexRequest $req
     *
     * @return string
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function findComplex(Location\Complex\FindComplexRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/complex',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @param FindStreetRequest $req
     *
     * @return string
     * @throws ClientExceptionInterface
     * @throws JsonException
     */
    public function findStreet(Location\Street\FindStreetRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/location/street',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @throws ClientExceptionInterface|JsonException
     */
    public function calculate(CalculationRequest $object): string
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/calculate',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @throws ClientExceptionInterface|JsonException
     */
    public function track(TrackRequest $object): string
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/track',
            $payload
        );

        return $this->getContents($request);
    }

    public function print(PrintRequest $object): string
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/print',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @throws ClientExceptionInterface|JsonException
     */
    public function createShipment(CreateShipmentRequest $req): string
    {
        $payload = $this->createPayload($req->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/shipment',
            $payload
        );

        return $this->getContents($request);
    }

    /**
     * @throws ClientExceptionInterface
     */
    public function cancelShipment(CancelShipmentRequest $object): string
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/shipment/cancel',
            $payload
        );

        return $this->getContents($request);
    }


    /**
     * @throws JsonException
     * @throws ClientExceptionInterface
     */
    public function destination(DestinationServicesRequest $object): string
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL . '/services/destination',
            $payload
        );

        return $this->getContents($request);
    }
}
