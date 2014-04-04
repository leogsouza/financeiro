<?php

Yii::import('application.models._base.BaseLancamento');

class Lancamento extends BaseLancamento
{
	public static function model($className=__CLASS__) 
    {
		return parent::model($className);
	}
    
    public function behaviors()
    {
        return array(
            'datetimeI18NBehavior' => array(
                'class' => 'ext.behaviors.DateTimeI18NBehavior'
            ),
        );
    }
    
    public function beforeSave()
    {
        if($this->isNewRecord) {
            $this->data_cadastro = $this->data_alteracao = date('d/m/Y H:i:s');
        } else {
            $this->data_alteracao = date('d/m/Y H:i:s');
        }
        return parent::beforeSave();
    }
}