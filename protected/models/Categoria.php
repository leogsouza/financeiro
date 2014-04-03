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
    
    public static function getCategoriaOptions()
    {
        $categorias = self::model()->findAll(array('order' => 'root,lft'));
        $level = 0;
        foreach ($categorias as $n => $categoria) {
            
            echo str_repeat('--', $categoria->lvl).$categoria->lvl.' '.$categoria->nome.'<br />';
            
           /* if ($categoria->lvl == $level)
                echo CHtml::closeTag('li') . "\n";
            else if ($categoria->lvl > $level)
                echo CHtml::openTag('ul') . "\n";
            else {
                echo CHtml::closeTag('li') . "\n";

                for ($i = $level - $categoria->lvl; $i; $i--) {
                    echo CHtml::closeTag('ul') . "\n";
                    echo CHtml::closeTag('li') . "\n";
                }
            }

            echo CHtml::openTag('li', array('id' => 'node_' . $categoria->primaryKey, 'rel' => $categoria->getAttribute($this->rel_property)));
            echo CHtml::openTag('a', array('href' => '#'));
            echo CHtml::encode($categoria->getAttribute($this->label_property));
            echo CHtml::closeTag('a');

            $level = $categoria->lvl;
        }

        for ($i = $level; $i; $i--) {
            echo CHtml::closeTag('li') . "\n";
            echo CHtml::closeTag('ul') . "\n";*/
        }
    }
    
}