.. title:: Speedy, PHP HTTP client

===============================
Speedy API Client Documentation
===============================

Speedy API Client is a PHP HTTP client that makes it easy to send HTTP requests to Speedy API.

.. code-block:: php
    :linenos:

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

User Guide
==========

.. toctree::
    :maxdepth: 3

    overview
    installation
    usage
    services
    model