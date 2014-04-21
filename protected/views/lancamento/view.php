<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	GxHtml::valueEx($model),
);

$this->pageTitle = Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model));

?>
<div class="row">
    <div class="col-md-12 margin-bottom-10">
        <?php echo TbHtml::buttonDropdown('Ações', array(
            array('label' => 'Voltar para lista', 'url' => array('admin')),    
        ),array('groupOptions' =>array('class' => 'pull-right'),'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>

    
    </div>
<div class="col-md-12 margin-bottom-10">
<?php $this->widget('bootstrap.widgets.TbDetailView', array(
	'data' => $model,
	'attributes' => array(
        'id',
        'descricao',
        'documento',
        array(
			'name' => 'categoria',
			'type' => 'raw',
			'value' => $model->categoria !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->categoria)), array('categoria/view', 'id' => GxActiveRecord::extractPkValue($model->categoria, true))) : null,
        ),
        'tipo',
        'status',
        'data_vencimento',
        'data_pagamento',
        'data_cadastro',
        'data_alteracao',
        'valor',
        'valor_pago',
        array(
			'name' => 'usuario',
			'type' => 'raw',
			'value' => $model->usuario !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->usuario)), array('usuario/view', 'id' => GxActiveRecord::extractPkValue($model->usuario, true))) : null,
        ),
	),
)); ?>
</div>
    </div>