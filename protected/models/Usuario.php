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
        if($this->isNewRecord) {
            $this->data_cadastro = $this->data_alteracao = date('d/m/Y H:i:s');
            
        } else {
            $this->data_alteracao = date('d/m/Y H:i:s');
        }
		$this->password = CPasswordHelper::hashPassword($this->password); // lets hash that shiz
		return parent::beforeSave();
	}
    
    public function behaviors()
    {
        return array(
            'datetimeI18NBehavior' => array(
                'class' => 'ext.behaviors.DateTimeI18NBehavior'
            ),
        );
    }
}