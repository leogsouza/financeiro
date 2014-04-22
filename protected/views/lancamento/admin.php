<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->pageTitle = Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2));
$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lancamento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-md-12 margin-bottom-10">
        <?php echo TbHtml::buttonGroup(array(
            array(
                'label' => '<i class="fa fa-plus"></i> Inserir Lançamento', 
                'url' => array('create'),    
                'htmlOptions' =>array('class' => 'green')
        ))); ?>

    
    </div>
    <div class="col-md-12 margin-bottom-10">
    <?php // echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
   
    <div class="search-form" style="display: none">
        <?php $this->renderPartial('_search', array(
            'model' => $model,
        )); ?>
    </div><!-- search-form -->

    <?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
        'id' => 'lancamento-grid',
        'fixedHeader' => true,
        'type' => 'striped',
        'responsiveTable' => true,
        'dataProvider' => $model->search(),
        'filter' => $model,
        'template' => "{items}",
        'columns' => array(
            'id',
            'descricao',
            'documento',
            array(
                'name'=>'categoria_id',
                'value'=>'GxHtml::valueEx($data->categoria)',
                'filter'=>Categoria::getCategoriaOptions(),
            ),
            array(
                'name' => 'tipo',
                'value' => '$data->tipotext',
                'filter' => $model->tipooptions,
            ),
            array(
                'name' => 'status',
                'value' => '$data->statustext',
                'filter' => $model->statusoptions,
            ),
            
            /*
            'data_vencimento',
            'data_pagamento',
            'data_cadastro',
            'data_alteracao',
            'valor',
            'valor_pago',
            array(
                    'name'=>'usuario_id',
                    'value'=>'GxHtml::valueEx($data->usuario)',
                    'filter'=>GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true)),
                    ),
            */
            array(
                'class' => 'TbButtonColumn',
                'template' => "{view} | {update} | {delete}",
                'buttons' => array(
                    'view' => array(
                        'label' => '<i class="fa fa-eye"></i>',
                        'imageUrl' => false,
                        'icon' =>false,
                    ),
                    'update' => array(
                        'label' => '<i class="fa fa-pencil"></i>',
                        'icon' => false,
                        'imageUrl' => false,
                    ),
                    'delete' => array(
                        'label' => '<i class="fa fa-trash-o"></i>',
                        'icon' => false,
                        'imageUrl' => false,
                    )
                )
            ),
        ),
    )); ?>
    </div>
</div>


