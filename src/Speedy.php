<?php declare(strict_types=1);

namespace VasilDakov\Speedy;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Client\ClientExceptionInterface;
use Fig\Http\Message\RequestMethodInterface;
use Fig\Http\Message\StatusCodeInterface;
use Psr\Http\Client\ClientInterface;
use VasilDakov\Speedy\Service\Calculation\CalculationRequest;
use VasilDakov\Speedy\Service\Calculation\CalculationResponse;

use VasilDakov\Speedy\Location\Complex\FindComplexRequest;
use VasilDakov\Speedy\Location\Complex\FindComplexResponse;
use VasilDakov\Speedy\Location\Country\FindCountryRequest;
use VasilDakov\Speedy\Location\Country\FindCountryResponse;
use VasilDakov\Speedy\Location\Country\FindCountryResponseFactory;
use VasilDakov\Speedy\Location\Office\FindOfficeRequest;
use VasilDakov\Speedy\Location\Office\FindOfficeResponse;
use VasilDakov\Speedy\Location\Site\FindSiteRequest;
use VasilDakov\Speedy\Location\Site\FindSiteResponse;
use VasilDakov\Speedy\Location\State\FindStateRequest;
use VasilDakov\Speedy\Location\State\FindStateResponse;
use VasilDakov\Speedy\Location\Street\FindStreetRequest;
use VasilDakov\Speedy\Location\Street\FindStreetResponse;
use VasilDakov\Speedy\Printing\PrintRequest;
use VasilDakov\Speedy\Printing\PrintResponse;
use VasilDakov\Speedy\Service\Client\GetContractClientsRequest;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponse;
use VasilDakov\Speedy\Service\Client\GetContractClientsResponseFactory;
use VasilDakov\Speedy\Shipment\CreateShipmentRequest;
use VasilDakov\Speedy\Shipment\CreateShipmentResponse;
use VasilDakov\Speedy\Track\TrackRequest;
use VasilDakov\Speedy\Track\TrackResponse;

/**
 * Class Speedy
 *
 * @author Vasil Dakov <vasildakov@gmail.com>
 * @copyright 2009-2022 Neutrino.bg
 * @version 1.0
 */
final class Speedy
{
    public const API_URL = 'https://api.speedy.bg/v1';
    public const USER_NAME = 'userName';
    public const PASSWORD  = 'password';
    public const LANGUAGE  = 'language';
    public const CLIENT_SYSTEM_ID = 'clientSystemId';
    public const SENDER = 'sender';
    public const CLIENT_ID = 'clientId';
    public const PRIVATE_PERSON = 'privatePerson';
    public const DROP_OFF_OFFICE_ID = 'dropoffOfficeId';
    public const PICKUP_OFFICE_ID = 'pickupOfficeId';
    public const ADDRESS_LOCATION = 'addressLocation';
    public const COUNTRY_ID = 'countryId';
    public const STATE_ID = 'stateId';
    public const SITE_ID = 'siteId';
    public const SITE_TYPE = 'siteType';
    public const SITE_NAME = 'siteName';
    public const POST_CODE = 'postCode';
    public const RECIPIENT = 'recipient';
    public const SERVICE = 'service';
    public const PICKUP_DATE = 'pickupDate';
    public const AUTO_ADJUST_PICKUP_DATE = 'autoAdjustPickupDate';
    public const SERVICE_IDS = 'serviceIds';
    public const DEFERRED_DAYS = 'deferredDays';
    public const SATURDAY_DELIVERY = 'saturdayDelivery';
    public const ADDITIONAL_SERVICES = 'additionalServices';
    public const FIXED_TIME_DELIVERY = 'fixedTimeDelivery';
    public const SPECIAL_DELIVERY_ID = 'specialDeliveryId';
    public const DELIVERY_TO_FLOOR = 'deliveryToFloor';
    public const COD = 'cod';
    public const AMOUNT = 'amount';
    public const CURRENCY_CODE = 'currencyCode';
    public const PROCESSING_TYPE = 'processingType';
    public const PAYOUT_TO_THIRD_PARTY = 'payoutToThirdParty';
    public const INCLUDE_SHIPPING_PRICE = 'includeShippingPrice';
    public const OBP_DETAILS = 'obpDetails';
    public const OPTION = 'option';
    public const RETURN_SHIPMENT_SERVICE_ID = 'returnShipmentServiceId';
    public const RETURN_SHIPMENT_PAYER = 'returnShipmentPayer';
    public const DECLARED_VALUE = 'declaredValue';
    public const FRAGILE = 'fragile';
    public const IGNORE_IF_NOT_APPLICABLE = 'ignoreIfNotApplicable';
    public const RETURNS = 'returns';
    public const ROD = 'rod';
    public const ENABLED = 'enabled';
    public const COMMENT = 'comment';
    public const RETURN_TO_CLIENT_ID = 'returnToClientId';
    public const RETURN_TO_OFFICE_ID = 'returnToOfficeId';
    public const THIRD_PARTY_PAYER = 'thirdPartyPayer';
    public const RETURN_RECEIPT = 'returnReceipt';
    public const SWAP = 'swap';
    public const SERVICE_ID = 'serviceId';
    public const PARCELS_COUNT = 'parcelsCount';
    public const ROP = 'rop';
    public const PALLETS = 'pallets';
    public const RETURN_VOUCHER = 'returnVoucher';
    public const PAYER = 'payer';
    public const CONTENT = 'content';
    public const TOTAL_WEIGHT = 'totalWeight';
    public const DOCUMENTS = 'documents';
    public const PALLETIZED = 'palletized';
    public const PARCELS = 'parcels';
    public const ID = 'id';
    public const SEQ_NO = 'seqNo';
    public const PACKAGE_UNIQUE_NUMBER = 'packageUniqueNumber';
    public const WEIGHT = 'weight';
    public const EXTERNAL_CARRIER_PARCEL_NUMBER = 'externalCarrierParcelNumber';
    public const SIZE = 'size';
    public const WIDTH = 'width';
    public const DEPTH = 'depth';
    public const HEIGHT = 'height';
    public const PAYMENT = 'payment';
    public const COURIER_SERVICE_PAYER = 'courierServicePayer';
    public const DECLARED_VALUE_PAYER = 'declaredValuePayer';
    public const PACKAGE_PAYER = 'packagePayer';
    public const THIRD_PARTY_CLIENT_ID = 'thirdPartyClientId';
    public const DISCOUNT_CARD_ID = 'discountCardId';
    public const CONTRACT_ID = 'contractId';
    public const CARD_ID = 'cardId';
    public const NAME = 'name';
    public const TYPE = 'type';
    public const MUNICIPALITY = 'municipality';
    public const REGION = 'region';
    public const LIMIT = 'limit';
    public const ISO_ALPHA_3 = 'isoAlpha3';
    public const ISO_ALPHA_2 = 'isoAlpha2';
    public const ADDRESS = 'address';
    public const STREET_ID = 'streetId';
    public const STREET_TYPE = 'streetType';
    public const STREET_NAME = 'streetName';
    public const STREET_NO = 'streetNo';
    public const COMPLEX_ID = 'complexId';
    public const COMPLEX_TYPE = 'complexType';
    public const COMPLEX_NAME = 'complexName';
    public const BLOCK_NO = 'blockNo';
    public const ENTRANCE_NO = 'entranceNo';
    public const FLOOR_NO = 'floorNo';
    public const APARTMENT_NO = 'apartmentNo';
    public const POI_ID = 'poiId';
    public const ADDRESS_NOTE = 'addressNote';
    public const ADDRESS_LINE_1 = 'addressLine1';
    public const ADDRESS_LINE_2 = 'addressLine2';
    public const X = 'x';
    public const Y = 'y';
    public const SHIPMENT_NOTE = 'shipmentNote';
    public const REF_1 = 'ref1';
    public const REF_2 = 'ref2';
    public const PHONE_1 = 'phone1';
    public const PHONE_2 = 'phone2';
    public const PHONE_3 = 'phone3';
    public const NUMBER = 'number';
    public const EXTENSION = 'extension';
    public const CLIENT_NAME = 'clientName';
    public const CONTACT_NAME = 'contactName';
    public const EMAIL = 'email';
    public const OBJECT_NAME = 'objectName';
    public const CONTENTS = 'contents';
    public const PACKAGE = 'package';
    public const PENDING_PARCELS = 'pendingParcels';
    public const STARTING_DATE = 'startingDate';
    public const SENDER_HAS_PAYMENT = 'senderHasPayment';
    public const SHIPMENT_ID = 'shipmentId';
    public const FORMAT = 'format';
    public const PAPER_SIZE = 'paperSize';
    public const PRINTER_NAME = 'printerName';
    public const DPI = 'dpi';
    public const PARCEL = 'parcel';
    public const ADDITIONAL_BARCODE = 'additionalBarcode';
    public const VALUE = 'value';
    public const LABEL = 'label';
    public const SHIPMENT_IDS = 'shipmentIds';
    public const LAST_OPERATION_ONLY = 'lastOperationOnly';
    public const CONSOLIDATION_REF = 'consolidationRef';
    public const REQUIRE_UNSUCCESSFUL_DELIVERY_STICKER_IMAGE = 'requireUnsuccessfulDeliveryStickerImage';
    public const EXCISE_GOODS = 'exciseGoods';
    public const SENDER_BANK_ACCOUNT = 'senderBankAccount';
    public const IBAN = 'iban';
    public const ACCOUNT_HOLDER = 'accountHolder';

    /**
     * @var Configuration
     */
    private Configuration $configuration;

    /**
     * PSR-18: HTTP Client
     * @var ClientInterface
     */
    private ClientInterface $client;

    /**
     * PSR-17: HTTP Factories
     * @var RequestFactoryInterface
     */
    private RequestFactoryInterface $factory;

    /**
     * @param Configuration $configuration
     * @param ClientInterface $client
     * @param RequestFactoryInterface $factory
     */
    public function __construct(
        Configuration $configuration,
        ClientInterface $client,
        RequestFactoryInterface $factory
    ) {
        $this->configuration = $configuration;
        $this->client  = $client;
        $this->factory = $factory;
    }

    /**
     * @param string $method
     * @param string $uri
     * @param array $data
     * @return RequestInterface
     */
    private function createRequest(string $method, string $uri, array $data): RequestInterface
    {
        $request = $this->factory->createRequest($method, $uri);

        $request = $request->withAddedHeader('Content-Type', 'application/json');

        $request->getBody()->write(\json_encode($data));

        return $request;
    }

    /**
     * @param array $data
     * @return array
     */
    private function createPayload(array $data): array
    {
        $config = $this->configuration->toArray();

        return \array_merge($config, $data);
    }

    /**
     * @param GetContractClientsRequest $object
     * @return GetContractClientsResponse
     * @throws ClientExceptionInterface
     */
    public function getContractClient(GetContractClientsRequest $object): GetContractClientsResponse
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            RequestMethodInterface::METHOD_POST,
            self::API_URL.'/client/contract',
            $payload
        );

        $response = $this->client->sendRequest($request);
        $json = $response->getBody()->getContents();

        return (new GetContractClientsResponseFactory())($json);
    }

    /**
     * @param FindCountryRequest $object
     * @return FindCountryResponse
     * @throws ClientExceptionInterface
     */
    public function findCountry(FindCountryRequest $object): FindCountryResponse
    {
        $payload = $this->createPayload($object->toArray());

        $request = $this->createRequest(
            'POST',
            self::API_URL.'/location/country',
            $payload
        );

        $response = $this->client->sendRequest($request);
        $json = $response->getBody()->getContents();
        //var_dump($json); exit();

        return (new FindCountryResponseFactory())($json);
    }

    /**
     * @param FindStateRequest $request
     * @return FindStateResponse
     */
    public function findState(FindStateRequest $request): FindStateResponse
    {
        return new FindStateResponse();
    }

    /**
     * @param FindOfficeRequest $request
     * @return FindOfficeResponse
     */
    public function findOffice(FindOfficeRequest $request): FindOfficeResponse
    {
        return new FindOfficeResponse();
    }

    /**
     * @param FindSiteRequest $request
     * @return FindSiteResponse
     */
    public function findSite(FindSiteRequest $request): FindSiteResponse
    {
        return new FindSiteResponse();
    }

    /**
     * @param FindComplexRequest $request
     * @return FindComplexResponse
     */
    public function findComplex(FindComplexRequest $request): FindComplexResponse
    {
        return new FindComplexResponse();
    }

    /**
     * @param FindStreetRequest $request
     * @return FindStreetResponse
     */
    public function findStreet(FindStreetRequest $request): FindStreetResponse
    {
        return new FindStreetResponse();
    }

    /**
     * @param CalculationRequest $request
     * @return CalculationResponse
     */
    public function calculation(CalculationRequest $request): CalculationResponse
    {
        return new CalculationResponse();
    }

    /**
     * @param TrackRequest $request
     * @return TrackResponse
     */
    public function track(TrackRequest $request): TrackResponse
    {
        return new TrackResponse();
    }

    /**
     * @param PrintRequest $request
     * @return PrintResponse
     */
    public function print(PrintRequest $request): PrintResponse
    {
        return new PrintResponse();
    }

    /**
     * @param CreateShipmentRequest $request
     * @return CreateShipmentResponse
     */
    public function createShipment(CreateShipmentRequest $request): CreateShipmentResponse
    {
        return new CreateShipmentResponse();
    }
}
