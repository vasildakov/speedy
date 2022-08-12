# 2.1 Shipment Service
See: https://api.speedy.bg/web-api.html#href-shipment-service

## 2.1.1 Create Shipment Request
See: https://api.speedy.bg/web-api.html#href-create-shipment-req

### Using the model to create the request

The shipment request can be created by using the model as the example:

```php
$request = new CreateShipmentRequest(
    new ShipmentSender(
        new ShipmentPhoneNumber('0888111111'),
        'john.doe@example.com',
        'John Doe'
    ),
    new ShipmentRecipient(
        new ShipmentPhoneNumber('0888999999'),
        'Ivan Ivanov',
        'ivan.ivanov@gmail.com'
    ),
    new ShipmentService(100),
    new ShipmentContent(1, 1.5, 'FURNITURE', 'BOX', null),
    new ShipmentPayment('RECIPIENT')
);
```

### Using the ShipmentRequestFactory

The shipment request factory can be used to create the request object from php array.

```php
$array = [
    'sender'    => [],
    'recipient' => [],
    'service'   => [],
    'content'   => [],
];

/** @var CreateShipmentRequest $request */
$request = (new CreateShipmentRequestFactory())($array);

/** @var CreateShipmentResponse $response */
$response = $speedy->createShipment($request);
```


## 2.1.2 Create Shipment Response
See: https://api.speedy.bg/web-api.html#href-create-shipment-resp

Example usage of CreateShipmentResponse

```php
$shipmentId = $response->getId();

/** @var ShipmentPrice $price */
$price = $response->getPrice();

$amount = $price->getAmount();
$vat    = $price->getVat();
$total  = $price->getTotal();
```


## 2.1.4 Cancel Shipment Request

See: https://api.speedy.bg/web-api.html#href-cancel-shipment-req

```php

/** @var CancelShipmentRequest $request */
$request = new CancelShipmentRequest($shipmentId);

/** @var CancelShipmentResponse $response */
$response = $speedy->cancelShipment($request);

```

## 2.1.5 Cancel Shipment Response
See: https://api.speedy.bg/web-api.html#href-cancel-shipment-resp



