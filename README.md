# MakeWeb Easy Digital Downloads Software Licensing Updater

Make your plugin or theme updatable with EDD Software Licensing. Based on the example code provided by @pippinsplugins

## Installation

Install with composer via the command line. 

### Composer

If you don't have composer you can get it [here.](https://getcomposer.org/download/)

### Install with Composer

From the root of your project type:

`composer require makeweb/edd-software-licensing-updater`

### Easy Digital Downloads - Software Licensing Extension

You will also need to have a server running an instance of [Easy Digital Downloads Software Licensing.](https://easydigitaldownloads.com/downloads/software-licensing/)

## Usage

Make sure you're including the composer autoloader in your main plugin file:

`require (__DIR__.'/vendor/autoload.php');`

This tells PHP where to look for the classes which the package requires so you don't have to write `include`/`require` statements for every php file.

Add the following to your main plugin file to boot the plugin updater.

```php
/**
 * Boot plugin update
 **/
(new \MakeWeb\EDDSoftwareLicensingUpdater\Updater)
    ->setHostUrl('https://my-server-running-eddsl.com')
    ->setName('My Plugin')
    ->setPluginFilePath(__FILE__)
    ->setVersion('1.0.0')
    ->setLicenseKey($licenseKey)
    ->register();
```

Make sure you set the value of `$licenseKey` to the license key generated by a purchase in EDD.
