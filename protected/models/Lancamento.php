<?php

Yii::import('application.models._base.BaseLancamento');

class Lancamento extends BaseLancamento
{
    const STATUS_PENDENTE = 0;
    const STATUS_PAGO = 1;    
    const STATUS_CANCELADO = 2;
    
    const TIPO_DESPESA = 0;
    const TIPO_RECEITA = 1;
    
    public $receita;
    public $despesa;
    public $saldo;
    public $periodo;
    public $quantidade;
    public $totalSaldo;
    public $totalReceita;
    public $totalDespesa;
    
    
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
                    'valor'=>'R$ #,##0.00', // specific format for someCol
                    'valor_operacao' => 'R$ #,##0.00',
                    'receita' => 'R$ #,##0.00',
                    'despesa' => 'R$ #,##0.00',
                    'saldo' => 'R$ #,##0.00',
                ),
                'parseExpression'=> "trim(strtr(\$value, array('.'=>'', ',' => '.','R$' => '')))",
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
    
    public function getStatusLabelText()
    {
        if($this->status == self::STATUS_PAGO) {
            return '<span class="label label-success">Pago</span>';
        } elseif($this->status == self::STATUS_CANCELADO) {
            return '<span class="label label-default">Cancelado</span>';
        } elseif($this->getDateDb('data_vencimento') < date("Y-m-d")) {
            return '<span class="label label-danger">Vencido</span>';
        } else {
            return '<span class="label label-warning">Pendente</span>';
        }
    }
    
    public function getDateDb($field)
    {
        return date($this->dateOutcomeFormat, CDateTimeParser::parse($this->$field, Yii::app()->locale->dateFormat));
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
    
    public function getTotalSaldo()
    {
        $criteria = $this->search()->criteria;
        
        $criteria->select = '@receita := (SELECT SUM(valor) FROM tbl_lancamento WHERE tipo =1) AS receita,'
            . '@despesa := (SELECT SUM(valor) FROM tbl_lancamento WHERE tipo =0) AS despesa,'
            . '(@receita-@despesa) AS saldo';
        
        $result = $this->find($criteria);
        
        return number_format($result->saldo, 2, ',', '.');        
    }
    
    public function getTotalReceita()
    {
        $criteria = $this->search()->criteria;
        
        $criteria->select = '@receita := (SELECT SUM(valor) FROM tbl_lancamento WHERE tipo =1) AS receita';
        
        $result = $this->find($criteria);
        
        return number_format($result->receita, 2, ',', '.');        
    }
    
    public function getTotalDespesa()
    {
        $criteria = $this->search()->criteria;
        
        $criteria->select = '@receita := (SELECT SUM(valor) FROM tbl_lancamento WHERE tipo =1) AS receita,'
            . '@despesa := (SELECT SUM(valor) FROM tbl_lancamento WHERE tipo =0) AS despesa,'
            . '(@receita-@despesa) AS saldo';
        
        $result = $this->find($criteria);
        
        return number_format($result->despesa, 2, ',', '.');
    }
    
}