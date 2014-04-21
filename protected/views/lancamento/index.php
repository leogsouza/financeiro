<?php

$this->breadcrumbs = array(
	Lancamento::label(2) => array('admin'),
	Yii::t('app', 'Index'),
);

$this->menu = array(
	array('label'=>Yii::t('app', 'Create') . ' ' . Lancamento::label(), 'url' => array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' ' . Lancamento::label(2), 'url' => array('admin')),
);
?>

<h1><?php echo GxHtml::encode(Lancamento::label(2)); ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 