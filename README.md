# Speedy API Client

Documentation

## Features

This library is compliant with [PSR-7: HTTP message interfaces](https://www.php-fig.org/psr/psr-7/), [PSR-17: HTTP Factories](https://www.php-fig.org/psr/psr-17/) and [PSR-18: HTTP Client](https://www.php-fig.org/psr/psr-18/) 


## Installation

Using Composer: 

```
$ composer require vasildakov/speedy
```

## Usage


```php
<?php declare(strict_types=1);

use VasilDakov\Speedy\Speedy;
use GuzzleHttp\Client;
use Laminas\Diactoros\RequestFactory;

/** @var Configuration $configuration */
$configuration = new Configuration('username', 'password', 'language');

/** @var \Psr\Http\Client\ClientInterface $client */
$client = new Client();

/** @var \Psr\Http\Message\RequestFactoryInterface $factory */
$factory = new RequestFactory();

$speedy = new Speedy($configuration, $client, $factory);

$response = $speedy->getContractClient(new GetContractClientsRequest());

```

## Services

### Calculation Service

### Client Service

```php

use VasilDakov\Speedy\Client;

/** @var Client\GetContractClientsRequest $request */
$request = new Client\GetContractClientsRequest();

/** @var Client\GetContractClientsResponse $response */
$response = $speedy->getContractClients($request);

/** @var Client\Client[] $clients */
$clients = $response->getClients();

```

### Location Service

### Print Service

### Shipment Service

```php

use VasilDakov\Speedy\Shipment;

$shipmentRequest = new Shipment\CreateShipmentRequest(
    new Shipment\ShipmentRecipient(),
    new Shipment\ShipmentSender(),
    new Shipment\ShipmentService()
);

$response = $speedy->createShipment($shipmentRequest);

$id = $response->getId();
$parcels = $response->getParcels();
$shipmentPrice = $response->getShipmentPrice();

```

### Track Service

### Create Shipment Request



## Docker

Build the image
```
$ docker build -t speedy .
```

Run the container
```
$ docker run -d --name speedy speedy
```
or start the container with mounted volume
```
$ docker run -it --rm --name speedy -v "$PWD":/usr/src/speedy -w /usr/src/speedy -d speedy
$ docker run -it --rm --name speedy -v //c/speedy:/usr/src/speedy -d speedy
```

List the containers
```
$ docker ps -a
CONTAINER ID   IMAGE                   COMMAND                  CREATED          STATUS                     PORTS                                        NAMES
2cfa293ddd1f   e8e013e6db1a            "docker-php-entrypoi…"   5 minutes ago    Up 5 minutes               9000/tcp                                     speedy
```

Run bash in speedy container
```
$ docker exec -it speedy bash
```

Stop and remove container
```
$ docker stop speedy
$ docker rm speedy
```

Rebuild the container
```
$ docker build --no-cache -t speedy .
```


## A successful Git branching model

1. Creating a feature branch

```
$ git checkout -b feature/the-feature-branch develop
$ git push --set-upstream origin feature/the-feature-branch
```

2. Incorporating a finished feature on develop

```
$ git checkout develop
$ git merge --no-ff feature/the-feature-branch
$ git branch -d feature/the-feature-branch
$ git push origin develop
```

3. Deleting a remote branch

```
$ git push origin -d feature/the-feature-branch
```