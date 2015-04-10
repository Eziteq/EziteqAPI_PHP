<?php

namespace EziteqAPI_PHP;

use EziteqAPI_PHP\Section\Customer;
use EziteqAPI_PHP\Section\Subscription;

class EziteqAPI {

	const AUTH_API_KEY = 'apiKey';
	const AUTH_OAUTH2 = 'oauth2';

	private $authenticated;
	private $expires;
	private $apiKey;
	private $oauth2;

	public function __construct($auth = EziteqAPI::AUTH_API_KEY, $args = array())
	{
		if($auth == EziteqAPI::AUTH_API_KEY) {

		} elseif($auth == EziteqAPI::AUTH_OAUTH2) {

		} else throw new \Exception('Wrong authentication method selected!');
	}

	public static function init($args = array())
	{
		return new EziteqAPI(EziteqAPI::AUTH_API_KEY, $args);
	}

	public static function initOauth2($args = array())
	{
		return new EziteqAPI(EziteqAPI::AUTH_OAUTH2, $args);
	}
}