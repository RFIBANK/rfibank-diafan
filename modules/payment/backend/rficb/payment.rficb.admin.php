<?php

if (! defined('DIAFAN'))
{
	include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/includes/404.php';
}

class Payment_rficb_admin
{
	public $config;

	public function __construct()
	{
		$this->config = array(
			"name" => 'Rficb',
			"params" => array(
                'rficb_key' => 'Rficb: ключ платежа',
                'rficb_skey' => 'Rficb: секретный ключ',
			)
		);
	}
}
