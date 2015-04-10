#Eziteq

[![Build Status](https://secure.travis-ci.org/Eziteq/EziteqAPI_PHP.png?branch=master)](http://travis-ci.org/Eziteq/EziteqAPI_PHP)
[![Latest Stable Version](https://poser.pugx.org/Eziteq/EziteqAPI_PHP/v/stable.png)](https://packagist.org/packages/Eziteq/EziteqAPI_PHP)

A PHP 5.3+ wrapper for Eziteq API requests.

##Installation
You can install **EziteqAPI_PHP** via composer or by downloading the source.

#### Via Composer:
**EziteqAPI_PHP** is available on the Packagist as the [`Eziteq/EziteqAPI_PHP`](http://packagist.org/packages/Eziteq/EziteqAPI_PHP) package.

```json
{
    "require": {
        "campaignmonitor/createsend-php": "{version}"
    }
}
```


#### Via ZIP file:
[Click here to download the source (.zip)](https://github.com/eziteq/EziteqAPI_PHP/zipball/master) which includes all dependencies.

Once you download the library, move the EziteqAPI_PHP folder to your project directory and then include the wrapper file:

	require '/path/to/EziteqAPI_PHP/EziteqAPI.php';
	
and you're good to go!

##Requirements

PHP 5.3.9 (or higher) is required. If you have access, PHP 5.4 (or higher) is *highly* recommended for its performance improvements.

### Documentation

Contact Eziteq for a API access and documentation.

###Example usage

```php
<?php

use EziteqAPI_PHP\EziteqAPI;

    // Make sure composer dependencies have been installed
    require __DIR__ . '/vendor/autoload.php';
	
	//Init and authenticate with Api key
	$eziteq = EziteqAPI::init(array(
		'apiKey' => 'a84fhgncmc432mgsa31' // Api key from Eziteq
	));

	//Init and authenticate with OAuth2
	$eziteq = EziteqAPI::initOAuth2(array(
		'clientId' => 14513528982,
		'secret' => 'b3f89ee80ca90adf9fe75535c974a400',
		'redirect_uri' => 'https://my.app/login'
	));
	
	if($eziteq->authenticate()) {
		
		// Get subscriptions
		$subscriptions = $eziteq->getSubscriptions();
		
		// Get specific customer
		$customer = $eziteq->getCustomer(array(
			'customerId' => 5432
		));
		
	} else 
		throw new Exception($eziteq->getMessage(), $eziteq->getCode()));
```