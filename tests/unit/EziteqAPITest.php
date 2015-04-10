<?php

use EziteqAPI_PHP\EziteqAPI;

class EziteqAPITest extends \PHPUnit_Framework_TestCase 
{
	/**
	 * @var EziteqAPI
	 */
	protected $object;

	protected function setUp()
	{
		$this->object = EziteqAPI::init(array(
			'apiKey' => '1234'
		));
	}

	public function testAuthenticate()
	{
		$authenticate = $this->object->authenticate();
		$this->assertTrue($authenticate);
	}
}