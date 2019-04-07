# Auspost for Laravel


## Laravel Version Compatibility
- Laravel `>= 5.x.x` on PHP `>= 7.1` is supported in the most recent version

## Install


Add config to **.env** file
```php
AUSPOST_API_KEY=
```

```
composer require byhbt/auspost-laravel:1.0.1
```
### Example

```
<?php

use Byhbt\Auspost\Facades\Auspost;

Route::get('/', function () {
    dd(Auspost::postage()->listDomesticLetterSizes());
});


```

## Links

* [Bug Tracker](https://github.com/byhbt/laravel-auspost/issues)
* [Code](https://github.com/byhbt/laravel-auspost)

## Credits:
* [Australia Post PHP Library](https://github.com/fontis/auspost-api-php)
