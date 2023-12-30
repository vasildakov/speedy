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

### Set up Speedy Client

The client can be set with any PSR-18 HTTP Client 

```php 
<?php

// configuration
$configuration = new Configuration(
    username: 'username',
    password: 'password',
    language: 'language'
);
```


Example with [Guzzle](https://github.com/guzzle/guzzle) and [Laminas Diactoros](https://github.com/laminas/laminas-diactoros)
```php
<?php

$client = new \GuzzleHttp\Client(); // PSR-18 HTTP Client
$factory = new \Laminas\Diactoros\RequestFactory(); // PSR-17 HTTP Factory
$speedy = new Speedy($configuration, $client, $factory);
```

Example with [Curl Client](https://github.com/php-http/curl-client) and [Nyholm](https://github.com/Nyholm/psr7) HTTP Factory
```php
<?php

$client = \Http\Client\Curl\Client(); // PSR-18 HTTP Client
$factory = new \Nyholm\Psr7\Factory\Psr17Factory(); // PSR-17 HTTP Factory
$speedy = new Speedy($configuration, $client, $factory);

```

### Making a Request

Once you've got the client configured, you can make your first request. By default, each method returns
the data in json and then can be used as a simple php array, or deserialized to the PHP model:

```php
<?php

// use an array
$request = new GetContractClientsRequest(clientSystemId: "1234567");
$json = $speedy->getContractClient($request);
$array = json_decode($json, true);
```

### JSON deserialization

The JSON data can be deserialized into model objects:

```php
// or 
// @var GetContractClientsResponse $response
$response = (new GetContractClientsResponseFactory())($json);

// @var ArrayCollection $collection
$collection = $response->getClients(); 
foreach ($collection as $client) {
    dump($client); // Client
    dump($client->getClientName());
    dump($client->getAddress()->getSiteName());
    dump($client->getAddress()->getPostcode());
}

```

## Documentation

TBC

## License

Code released under [the MIT license](https://github.com/vasildakov/speedy/blob/main/LICENSE)