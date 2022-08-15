============
Installation
============

The recommended way to install Speedy is with Composer. Composer is a dependency management tool for PHP that allows you to declare the dependencies your project needs and installs them into your project.

The recommended way to install Speedy is with
`Composer <https://getcomposer.org>`_. Composer is a dependency management tool
for PHP that allows you to declare the dependencies your project needs and
installs them into your project.

.. code-block:: bash

    # Install Composer
    curl -sS https://getcomposer.org/installer | php

You can add Speedy as a dependency using Composer:

.. code-block:: bash

    composer require vasildakov/speedy:^1.0

Alternatively, you can specify Speedy as a dependency in your project's
existing composer.json file:

.. code-block:: js

    {
      "require": {
         "vasildakov/speedy": "^1.0"
      }
   }

After installing, you need to require Composer's autoloader:

.. code-block:: php

    require 'vendor/autoload.php';

You can find out more on how to install Composer, configure autoloading, and
other best-practices for defining dependencies at `getcomposer.org <https://getcomposer.org>`_.