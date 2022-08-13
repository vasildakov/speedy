=====
Usage
=====

You can send requests with Speedy Client using a `Speedy\\SpeedyInterface` object.

Configuration
-------------

Create a new Configuration with Speedy `username`, `password` and `language`

.. code-block:: php

    use VasilDakov\Speedy;

    /** @var Configuration $configuration */
    $configuration = new Configuration('username', 'password', 'language');


Creating a Client
-----------------

Speedy Client can be configured with any `Psr\\Http\\Client\\ClientInterface` implementation like Guzzle
to send HTTP Request and to receive HTTP Response.

.. code-block:: php

    use VasilDakov\Speedy\Speedy;
    use GuzzleHttp\Client;
    use Laminas\Diactoros\RequestFactory;

    /** @var Configuration $configuration */
    $configuration = new Configuration('username', 'password', 'language');

    /** @var Psr\\Http\\Psr\Http\Message\\ClientInterface $httpClient */
    $httpClient = new GuzzleHttp\Client();

    /** @var Psr\\Http\\Message\\ClientInterface $RequestFactoryInterface */
    $httpFactory = new \Laminas\Diactoros\RequestFactory();

    $speedy = new Speedy($configuration, $httpClient, $httpFactory);


Sending Requests
----------------

.. code-block:: php

    $request = new GetContractClientsRequest();
    $response = $speedy->getContractClient($request);

Using Responses
---------------

.. code-block:: php

    /** @var Client\GetContractClientsRequest $request */
    $request = new Client\GetContractClientsRequest();

    /** @var Client\GetContractClientsResponse $response */
    $response = $speedy->getContractClients($request);

    /** @var Client\Client[] $clients */
    $clients = $response->getClients();
