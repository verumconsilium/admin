# Laravel Admin Panel

This package is intended to help with the speed of development of new sites that require some type of administration panel 

Feel free to use this package if it is of any use to you

## Installation

To install the package first you'll need to require it trough composer

```
composer require verumconsilium/admin
``` 

Once you've installed the package the next step is to register the Service Provider.
Add the next element to the providers array in your `config/app.php` file

```php
'providers' => [
  
  VerumConsilium\Admin\AdminServiceProvider::class,
  
]
```
