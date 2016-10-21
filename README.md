# flipninja/axcelerate-laravel

A Laravel service provider for [flipninja/axcelerate-php](https://github.com/weareflip/axcelerate-php).

http://flip.ninja/
https://www.axcelerate.com.au/

## Usage

### Config

Add the following to your `config/services.php`

```php
<?php


return [
    // ...
    'axcelerate' => [
        'apiToken' => env('AXCELERATE_APITOKEN'),
        'wsToken' => env('AXCELERATE_WSTOKEN')
    ],
];
```

Append `AXCELERATE_APITOKEN` `AXCELERATE_WSTOKEN` keys to your `.env`.

### Provider

For Laravel, add the service provider to your provider array in `config/app.php`

```php
<?php

return [
    // ...
    'providers' => [
        FlipNinja\AxcelerateLaravel\AxcelerateServiceProvider::class
    ]
];
```
