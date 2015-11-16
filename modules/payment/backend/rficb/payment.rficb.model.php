<?php

if (! defined('DIAFAN'))
{
	include dirname(dirname(dirname(dirname(dirname(__FILE__))))).'/includes/404.php';
}

class Payment_rficb_model extends Diafan
{
	/**
     * Формирует данные для формы платежной системы "Rficb"
     * 
     * @param array $params настройки платежной системы
     * @param array $pay данные о платеже
     * @return void
     */
	public function get($params, $pay)
	{
		//формирование подписи
		$link = "https://partner.rficb.ru/a1lite/input/";
 
		$link .= "?key=".$params['rficb_key']
		."&cost=".$pay["summ"]
		."&order_id=".$pay["id"]  
    ."&name=заказ-".$pay["id"]
		."&Desc=".$this->diafan->translit($pay["desc"]);

		$this->diafan->redirect($link);
		exit;
	}
}
