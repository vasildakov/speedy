========
Services
========

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

