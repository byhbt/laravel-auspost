# Auspost for Laravel

Australia Post Delivery Rate Calculator.

## Laravel Version Compatibility
- Laravel `>= 5.x.x` on PHP `>= 7.1` is supported in the most recent version

## Installation
### Step 1: 
Install the ```byhbt/auspost-laravel``` package:
```
composer require byhbt/auspost-laravel:1.0.0
```

### Step 2:

Update ```config/app.php```

```php
<?php 
'providers' => array(
    // ...
    Byhbt\Auspost\AuspostServiceProvider::class,
)

'aliases' => array(
    // ...
    'Auspost' => Byhbt\Auspost\Facades\Auspost::class,
)
```

### Step 3:
Get the Auspost API key at https://developers.auspost.com.au/register  

Add config to **.env** file
```php
AUSPOST_API_KEY=
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
