=====
Usage
=====

You can send requests with Speedy Client using a `Speedy\\SpeedyInterface` object.

Configuration
-------------

.. code-block:: php

    use VasilDakov\Speedy;

    /** @var Configuration $configuration */
    $configuration = new Configuration('username', 'password', 'language');


Creating a Client
-----------------

Speedy Client is using any `Psr\\Http\\Client\\ClientInterface` implementation e.g. Guzzle to send HTTP Request
and to receive HTTP Response.

.. code-block:: php

    use VasilDakov\Speedy;

    /** @var Configuration $configuration */
    $configuration = new Configuration('username', 'password', 'language');

    $speedy = new Speedy($configuration, $httpClient, $httpFactory);


Sending Requests
----------------

docs goes here

Using Responses
---------------

docs goes here