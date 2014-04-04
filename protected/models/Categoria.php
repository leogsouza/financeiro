<?php

Yii::import('application.models._base.BaseCategoria');

class Categoria extends BaseCategoria
{
	public static function model($className=__CLASS__) 
    {
		return parent::model($className);
	}
    
    public function behaviors()
    {
        return array(
            'NestedSetBehavior'=>array(
                'class'=>'application.behaviors.NestedSetBehavior',
                'leftAttribute'=>'lft',
                'rightAttribute'=>'rgt',
                'levelAttribute'=>'lvl',
                'hasManyRoots' => true,
            ),
            'datetimeI18NBehavior' => array(
                'class' => 'ext.behaviors.DateTimeI18NBehavior'
            ),
        );
    }
    
    protected function beforeSave()
    {
        if($this->isNewRecord) {
            $this->data_cadastro = $this->data_alteracao = date("d/m/Y H:i:s");
        }
        else {
            $this->data_alteracao = date("d/m/Y H:i:s");
        }
        
        return parent::beforeSave();
    }
    
    public static function getCategoriaOptions()
    {
        $nivel = 1;
        $path = '';
        $roots = self::model()->roots()->findAll();
        $arrOptions = array();
        
        foreach ($roots as $root) {
            $path = $nivel.'.';
            $arrOptions[$root->id] = $path.' '.$root->nome;
            $root->getFilhos($arrOptions,$path);
            $nivel++;
        }
        
        return $arrOptions;
    }
    
    public function getFilhos(&$arrLevel,$path)
    {
        $nivel = 1;
        $filhos = $this->children()->findAll();
       
        foreach($filhos as $filho)
        {
            $pathFilho = $path.$nivel.'.';
            $arrLevel[$filho->id] = str_repeat('&nbsp;&nbsp;', ($filho->lvl-1)*2).$pathFilho.' '.$filho->nome;
            $filho->getFilhos($arrLevel,$pathFilho);
            
            $nivel++;
        }
    }
    
}