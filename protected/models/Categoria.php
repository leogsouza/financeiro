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
        $categorias = self::model()->findAll(array('order' => 'root,lft'));
        $level = 1;
        $arrOptions = array();
        
        foreach ($categorias as $categoria) {
            $arrOptions[$categoria->id] = str_repeat(' - -', ($categoria->lvl-1)).' '.$categoria->nome;
        }
        
        return $arrOptions;
    }
    
    public static function getChildren()
    {
        $categoria = Categoria::model()->findByPk(2);
        
        var_dump(($categoria->prevSibling));
    }
    
}