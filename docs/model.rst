=====
Model
=====

Each request object is composed by the Models

.. code-block:: php
    :linenos:

    $request = new CalculationRequest(
        new CalculationSender(
            new AddressLocation()
        )
    );

    $response = $speedy->calculation($request);

*******
Address
*******


***********
BankAccount
***********

******
Client
******
