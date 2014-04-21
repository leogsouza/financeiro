<?php

Yii::import('application.models._base.BaseLancamento');

class Lancamento extends BaseLancamento
{
    const STATUS_PENDENTE = 0;
    const STATUS_PAGO = 1;    
    const STATUS_CANCELADO = 2;
    
    const TIPO_DESPESA = 0;
    const TIPO_RECEITA = 1;
    
	public static function model($className=__CLASS__) 
    {
		return parent::model($className);
	}
    
    public function rules()
    {
        $rules = parent::rules();
        
        return CMap::mergeArray($rules, array(
            array('tipo','required'),
        ));
    }
    
    public function behaviors()
    {
        return array(
            'datetimeI18NBehavior' => array(
                'class' => 'ext.behaviors.DateTimeI18NBehavior'
            ),
            'decimalI18NBehavior' => array(
                'class' => 'ext.behaviors.DecimalI18NBehavior',
                'format'=>'db',  // use DB format by default
                'formats'=> array(
                    'someCol'=>'#0.0', // specific format for someCol
                ),
                'parseExpression'=> "strtr(\$value, ',' , '.' )",
            )
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
    
    public function getStatusOptions()
    {
        return array(
            self::STATUS_PENDENTE => 'Pendente',
            self::STATUS_PAGO => 'Pago',
            self::STATUS_CANCELADO => 'Cancelado',
        );
    }
    
    public function getStatusText()
    {
        $options = $this->getStatusOptions();
        
        return isset($options[$this->status]) ? $options[$this->status] : '';
    }
    
    public function getTipoOptions()
    {
        return array(
            self::TIPO_DESPESA => 'Despesa',
            self::TIPO_RECEITA => 'Receita',
        );
    }
    
    public function getTipoText()
    {
        $options = $this->getTipoOptions();
        
        return isset($options[$this->tipo]) ? $options[$this->tipo] : '';
    }
    
}