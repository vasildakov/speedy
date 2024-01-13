========
Services
========

Instead of calling the serializer every time, you can enhance the original Speedy client
by decorating it with the SpeedyModelDecorator. This enhancement makes the responses
more convenient, predictable and easy to use.

.. code-block:: php
    :linenos:

    <?php

    $speedy = new SpeedyModelDecorator(
        new Speedy($configuration, $client, $factory)
    );


**************
Client Service
**************


Get Client
==========

Get client by id. Client id is provided as parameter in URL path

.. code-block:: php
    :linenos:

    $request = new GetClientRequest($id);
    $response = $speedy->getClient($request);

    /** @var Client $client */
    $client = $response->getClient();



Get Contract Clients
====================

Get clients with same contract as logged user's one, if any

.. code-block:: php
    :linenos:

    $request = new GetContractClientsRequest();
    $response = $speedy->getContractClients($request);

    /** @var ArrayCollection $clients */
    $clients = $response->getClients();

    /** @var Model\Client $client */
    $client = $clients->first();

    $clientId = $client->getClientId();
    $clientName = $client->getClientName();
    $contractName = $client->getContractName();

    /** @var Model\Address $address */
    $address = $client->getAddress();



****************
Shipment Service
****************

Create Shipment
===============

.. code-block:: php
    :linenos:

    $request = new CreateShipmentRequest(
        new ShipmentSender(),
        new ShipmentRecipient(),
        new ShipmentService(),
        new ShipmentContent(),
        new ShipmentPayment()
    );

    $response = $speedy->createShipment($request);


Cancel Shipment
===============

.. code-block:: php
    :linenos:

    $request = new CancelShipmentRequest();
    $response = $speedy->cancelShipment($request);

Update Shipment
===============

.. code-block:: php
    :linenos:

    $request = new UpdateShipmentRequest();
    $response = $speedy->updateShipment($request);

Shipment Information
====================

*************
Print Service
*************
Print Service

***********************
Track And Trace Service
***********************
Track And Trace Service


******
Pickup
******
Pickup

****************
Location Service
****************
Location Service



Find Country
============

.. code-block:: php
    :linenos:

    $request = new FindCountry('Bulgaria');

    /** @var FindCountryResponse $countries */
    $response = $speedy->findCountry($request);

    /** @var ArrayCollection $countries */
    $countries = $response->getCountries();

    /** @var Model\Country $country */
    $country = $countries->first();

    $countryId = $country->getId(); // int 100
    $countryName = $country->getName(); // string BULGARIA


Find Site
============

.. code-block:: php
    :linenos:

    <?php

    $request = new FindSite(countryId: 100, name: 'Sof');

    $response = $speedy->findSite($request);
    foreach($response->getCities()) {
        $countryId = $city->getId();
        $countryName = $city->getName();
    }

