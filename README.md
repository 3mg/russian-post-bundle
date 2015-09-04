RussianPost Bundle
==================

Библиотека для работы с сервисом отслеживания Почты России.
Можно использовать standalone и как symfony bundle.


Installation
------------

There are two recommended ways to install the bundle via [Composer](https://getcomposer.org/):

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

if it fails try add

```js
"minimum-stability": "dev",
```

        
Using with symfony
------------------

### add to AppKernel.php
```
...
new a3mg\RussianPostBundle\a3mgRussianPostBundle(),
...
```

### add to config.yml
```yml
...
# a3mgRussianPostBundle
a3mg_russian_post:
    login: 'your_login'
    password: 'your_password'
...
```

### get service

```php
$api = $this->container->get('russian_post_api');

try {
    /** @var \a3mg\RussianPostBundle\Model\OperationHistoryData $object */
    $object = $api->getTrackOperationHistory("EE123456785KR");
    ...
} catch (\a3mg\RussianPostBundle\Exception\InvalidTrackException $e) {
    ...
} catch (\a3mg\RussianPostBundle\Exception\RussianPostApiException $e) {
    ...
}
```

Using stand alone
-----------------
```php
use a3mg\RussianPostBundle\Service\RussianPostApiFactory;
...
$api = RussianPostApiFactory::createApi("your_login", "your_password");
try {
    /** @var \a3mg\RussianPostBundle\Model\OperationHistoryData $object */
    $object = $api->getTrackOperationHistory("EE123456785KR");
    ...
} catch (\a3mg\RussianPostBundle\Exception\InvalidTrackException $e) {
    ...
} catch (\a3mg\RussianPostBundle\Exception\RussianPostApiException $e) {
    ...
}
```

Development
-----------

### Updating api model

* composer install
* composer run-script build_rus_post
* composer run-script build_rus_post_metadata

### Run tests

```
./vendor/bin/phpunit --config phpunit.xml.dist
```