=====
Usage
=====

Configuration
-------------

Let's presume that you are using PHP dotenv to load environment variables from a file named .env.
In this case, you need to add the following variables:

.. code-block:: env

    SPEEDY_USERNAME="username"
    SPEEDY_PASSWORD="password"
    SPEEDY_LANGUAGE="EN"


The next step is to create a new Configuration instance like in the example bellow:

.. code-block:: php

    <?php

    use VasilDakov\Speedy;

    // configuration
    $configuration = new Configuration(
        username: $_ENV['SPEEDY_USERNAME'],
        password: $_ENV['SPEEDY_PASSWORD'],
        language: $_ENV['SPEEDY_LANGUAGE']
    );


Configuring Speedy Client
-------------------------

The final step is to configure the Speedy client. The client can be configured with any PSR-18 HTTP Client and PSR-17 HTTP Factory:

Example with  `Guzzle HTTP Client <https://github.com/guzzle/guzzle>`_ and  `Laminas Diactoros <https://github.com/laminas/laminas-diactoros>`_

.. code-block:: php

    <?php

    use GuzzleHttp\Client;
    use Laminas\Diactoros\RequestFactory;

    $client  = new Client(); // PSR-18 HTTP Client
    $factory = new RequestFactory(); // PSR-17 HTTP Factory
    $speedy  = new Speedy($configuration, $client, $factory);


Example with `Symfony HTTP Client <https://github.com/symfony/http-client>`_ and `Nyholm HTTP Factory <https://github.com/Nyholm/psr7>`_

.. code-block:: php

    <?php

    use Nyholm\Psr7\Factory\Psr17Factory;
    use Symfony\Component\HttpClient\Psr18Client;

    $client  = new Psr18Client(); // PSR-18 HTTP Client
    $factory = new Psr17Factory(); // PSR-17 HTTP Factory
    $speedy  = new Speedy($configuration, $client, $factory);



Making a Request
----------------

Once you have configured the client, you can proceed to make your first request. By default, each method returns the data in JSON, which can then be utilized as a simple PHP array or deserialized into the PHP model.

.. code-block:: php

    <?php

    // use an array
    $request = new GetContractClientsRequest(clientSystemId: "1234567");
    $json = $speedy->getContractClient($request);
    $array = json_decode($json, true);



Processing the Response
-----------------------

The client API always returns the raw JSON response received from the endpoint. The JSON can be used as it is, decoded into a PHP associative array, or deserialized into a model object.

Deserialization can be achieved in two different ways: 1) by using the serializer, or 2) by decorating the original Speedy client with the SpeedyModelDecorator.

Using serializer:

.. code-block:: php

    <?php

    $json = $speedy->getContractClient($request); # json

    $serializer = (new SerializerFactory())(); # JMS\Serializer\SerializerInterface

    $response = $serializer->deserialize(
        data: $json,
        type: GetContractClientsResponse::class,
        format: 'json'
    ); # GetContractClientsResponse


Instead of calling the serializer every time, you can enhance the original Speedy client by decorating it with the SpeedyModelDecorator. This enhancement makes the responses more convenient, predictable and easy to use.

.. code-block:: php
    <?php

    $decorator = new SpeedyModelDecorator(
        new Speedy($configuration, $client, $factory)
    );

    /** @var GetContractClientsResponse $response */
    $response = $decorator->getContractClient(new GetContractClientsRequest());


Using the PHP model
-------------------

.. code-block:: php
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