<?php

$this->breadcrumbs = array(
	Categoria::label(2),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Categoria::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Categoria::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Categoria::label(2)); ?></h1>

<?php
Categoria::getChildren();exit;
echo CHtml::dropDownList('teste', '', Categoria::getCategoriaOptions());
/* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */
/*$level=0;
$categories = Categoria::model()->findAll(array('order'=>'lft'));
foreach($categories as $n=>$category)
{
    if($category->lvl==$level)
        echo CHtml::closeTag('li')."\n";
    else if($category->lvl>$level)
        echo CHtml::openTag('ul')."\n";
    else
    {
        echo CHtml::closeTag('li')."\n";
 
        for($i=$level-$model->lvl;$i;$i--)
        {
            echo CHtml::closeTag('ul')."\n";
            echo CHtml::closeTag('li')."\n";
        }
    }
 
    echo CHtml::openTag('li');
    echo CHtml::encode($category->nome);
    $level=$category->lvl;
}
 
for($i=$level;$i;$i--)
{
    echo CHtml::closeTag('li')."\n";
    echo CHtml::closeTag('ul')."\n";
}*/


/**
 * tree view  file
 * Renders the JsTreeWidget
 *
 * @author Spiros Kabasakalis <kabasakalis@gmail.com>
 * @link http://iws.kabasakalis.gr/
 * @link http://www.reverbnation.com/spiroskabasakalis
 * @copyright Copyright &copy; 2013 Spiros Kabasakalis
 * @since 1.0
 * @license  http://opensource.org/licenses/MIT  The MIT License (MIT)
 * @version 1.0.0
 */

$this->widget('application.widgets.JsTreeWidget',
    array('modelClassName' => 'Categoria',
        'jstree_container_ID' => 'Categoria-wrapper',
        'themes' => array('theme' => 'default', 'dots' => true, 'icons' => true),
        'plugins' => array('themes', 'html_data', 'contextmenu', 'crrm', 'dnd', 'cookies', 'ui')
    ));