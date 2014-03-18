<?php

Yii::import('application.models._base.BaseLancamento');

class Lancamento extends BaseLancamento
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}