# Speedy API Client

An easy to use PHP client for [Speedy REST API](https://api.speedy.bg/web-api.html) 

[![build](https://github.com/vasildakov/speedy/actions/workflows/php.yml/badge.svg)](https://github.com/vasildakov/speedy/actions)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/vasildakov/speedy/badges/quality-score.png?b=main)](https://scrutinizer-ci.com/g/vasildakov/speedy/?branch=main)
[![Code Coverage](https://scrutinizer-ci.com/g/vasildakov/speedy/badges/coverage.png?b=main)](https://scrutinizer-ci.com/g/vasildakov/speedy/?branch=main)
[![Build Status](https://scrutinizer-ci.com/g/vasildakov/speedy/badges/build.png?b=main)](https://scrutinizer-ci.com/g/vasildakov/speedy/build-status/main)
[![Packagist License](https://img.shields.io/packagist/l/vasildakov/speedy?color=blue)](https://github.com/vasildakov/speedy/blob/main/LICENSE)
[![Packagist Dependency Version](https://img.shields.io/packagist/dependency-v/vasildakov/speedy/php)](https://packagist.org/packages/vasildakov/shipping)
[![Packagist Downloads](https://img.shields.io/packagist/dt/vasildakov/speedy?color=blue)](https://packagist.org/packages/vasildakov/speedy/stats)

Speedy client is a PSR-7 and PSR-18 compliant HTTP client that implements Speedy communication protocol. 
It has clean and consistent API, is fully unit tested and even comes with an example application to get you started.


## Features

This library is compliant with [PSR-7: HTTP message interfaces](https://www.php-fig.org/psr/psr-7/), [PSR-17: HTTP Factories](https://www.php-fig.org/psr/psr-17/) and [PSR-18: HTTP Client](https://www.php-fig.org/psr/psr-18/) 


## Installation

Using Composer: 

```
$ composer require vasildakov/speedy
```

## Usage

### The Configuration

Let's presume that you are using [PHP dotenv](https://github.com/vlucas/phpdotenv) to load environment variables 
from a file named `.env`. In this case, you need to add the following variables:

```
SPEEDY_USERNAME="username"
SPEEDY_PASSWORD="password"
SPEEDY_LANGUAGE="EN"
```

The next step is to create a new Configuration instance like in the example bellow:

```php 
<?php

// configuration
$configuration = new Configuration(
    username: $_ENV['SPEEDY_USERNAME'],
    password: $_ENV['SPEEDY_PASSWORD'],
    language: $_ENV['SPEEDY_LANGUAGE']
);
```

### Configuring Speedy Client

The final step is to configure the Speedy client. 
The client can be configured with any `PSR-18 HTTP Client` and `PSR-17 HTTP Factory`:

Example with [Guzzle](https://github.com/guzzle/guzzle) and [Laminas Diactoros](https://github.com/laminas/laminas-diactoros)
```php
<?php

use GuzzleHttp\Client;
use Laminas\Diactoros\RequestFactory;

$client  = new Client(); // PSR-18 HTTP Client
$factory = new RequestFactory(); // PSR-17 HTTP Factory
$speedy  = new Speedy($configuration, $client, $factory);
```

Example with [Symfony HTTP Client](https://github.com/symfony/http-client) 
and [Nyholm HTTP Factory](https://github.com/Nyholm/psr7)
```php
<?php

use Nyholm\Psr7\Factory\Psr17Factory;
use Symfony\Component\HttpClient\Psr18Client;

$client  = new Psr18Client(); // PSR-18 HTTP Client
$factory = new Psr17Factory(); // PSR-17 HTTP Factory
$speedy  = new Speedy($configuration, $client, $factory);

```

### Making a Request

Once you have configured the client, you can proceed to make your first request. 
By default, each method returns the data in JSON, which can then be utilized as a 
simple PHP array or deserialized into the PHP model.

```php
<?php

// use an array
$request = new GetContractClientsRequest(clientSystemId: "1234567");
$json = $speedy->getContractClient($request);
$array = json_decode($json, true);
```

### Processing the Response

The client API always returns the raw JSON response received from the endpoint. 
The JSON can be used as it is, decoded into a PHP associative array, or deserialized 
into a model object.

Deserialization can be achieved in two different ways: 1) by using the serializer, 
or 2) by decorating the original Speedy client with the SpeedyModelDecorator.


Using serializer:

```php
<?php

$json = $speedy->getContractClient($request); # json

$serializer = (new SerializerFactory())(); # JMS\Serializer\SerializerInterface

$response = $serializer->deserialize(
    data: $json, 
    type: GetContractClientsResponse::class, 
    format: 'json'
); # GetContractClientsResponse
```

Instead of calling the serializer every time, you can enhance the original Speedy client 
by decorating it with the SpeedyModelDecorator. This enhancement makes the responses more 
convenient, predictable and easy to use.

```php
<?php

$decorator = new SpeedyModelDecorator(
    new Speedy($configuration, $client, $factory)
);

/** @var GetContractClientsResponse $response */
$response = $decorator->getContractClient(new GetContractClientsRequest());
```

Using the model

```php
<?php

// @var ArrayCollection $collection
$collection = $response->getClients();
foreach ($collection as $client) {
    dump($client); # Model\Client
    dump($client->getClientName());
    dump($client->getAddress()); # Model\Address
    dump($client->getAddress()->getSiteName()); # string
    dump($client->getAddress()->getPostcode()); # string 
}
```


## Documentation

TBC

## License

Code released under [the MIT license](https://github.com/vasildakov/speedy/blob/main/LICENSE)