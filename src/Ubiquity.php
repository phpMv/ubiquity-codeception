<?php

namespace Codeception\Module;

use Codeception\Lib\Framework;
use Codeception\Lib\Connector\UbiquityConnector;

class Ubiquity extends Framework {
	protected $config = [ "root" => '/' ];

	/**
	 *
	 * {@inheritdoc}
	 * @see \Codeception\Module::_initialize()
	 */
	public function _initialize() {
		$index = \Codeception\Configuration::projectDir () . $this->config ['root'].'index.php';
		$this->client = new UbiquityConnector();
		$this->client->setIndex ( $index );
	}
}

