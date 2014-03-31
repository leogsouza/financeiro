<?php

Yii::import('application.models._base.BaseUsuario');

class Usuario extends BaseUsuario
{
	public static function model($className=__CLASS__) 
    {
		return parent::model($className);
	}
    
    public function validatePassword($password)
    {
        return CPasswordHelper::verifyPassword($password,$this->senha);
    }

	public function beforeSave()
    {
		$this->password = CPasswordHelper::hashPassword($this->password); // lets hash that shiz
		return parent::beforeSave();
	}
}