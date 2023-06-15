## 2.7 Client Service

### 2.7.4 Get Contract Clients Request (GetContractClientsRequest)

```php 
<?php

$speedy = new Speedy($configuration, $guzzleHttp, $factory);

/** @var GetContractClientsResponse $response */
$response = $speedy->getContractClient(new GetContractClientsRequest());

```

### 2.7.5 Get Contract Clients Response (GetContractClientsResponse)
```php 
<?php

// get clients
$clients = $response->getClients(); // ArrayCollection

// get first client
$client = $clients->first(); // Speedy\Model\Client

// get address
$address = $client->getAddress(); // Speedy\Model\Address

```
