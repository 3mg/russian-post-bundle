RussianPost Bundle
==============

Api для работы с сервисом отслеживания Почты России.
Работает как stand-alone и как symfony bundle.


Installation
------------

There are two recommended ways to install the `xsd-reader` via [Composer](https://getcomposer.org/):

* using the ``composer require`` command:

```bash
composer require '3mg/russian-post-bundle:dev-master'
```

* adding the dependency to your ``composer.json`` file:

```js
"require": {
    ..
    "3mg/russian-post-bundle" : "dev-master",
    ..
}
```
Using with symfony
------------------

### add to AppKernel.php
```
...
new a3mg\RussianPostBundle\a3mgRussianPostBundle(),
...
```

### add to parameters.yml

### get service

$api = $this->container->get();

Using stand alone
-----------------
See Tests\Test.php

Dev only. Updating api model
----------------------------

composer run-script build

composer run-script build_metadata