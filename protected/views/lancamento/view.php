<?php

$this->breadcrumbs = array(
	$model->label(2) => array('admin'),
	GxHtml::valueEx($model),
);

$this->pageTitle = Yii::t('app', 'View') . ' ' . GxHtml::encode($model->label()) . ' ' . GxHtml::encode(GxHtml::valueEx($model));

?>
<div class="row">
    <div class="col-md-12 margin-bottom-10">
        <?php echo TbHtml::buttonGroup(array(
            array(
                'label' => '<i class="fa fa-refresh"></i> '.
                    Yii::t('app', 'Update') . ' ' . $model->label(), 
                'url' => array(
                    'update','id' =>$model->id
                ),
                'htmlOptions' => array('class'=> 'green')
            ),
            array(
                'label' => '<i class="fa fa-trash-o"></i> '.
                    Yii::t('app', 'Delete') . ' ' . $model->label(), 
                'url'=>'#', 
                'htmlOptions' => array(
                    'class'=> 'red', 
                    'submit' => array(
                        'delete', 'id' => $model->id
                    ),
                    'confirm'=>'Deseja excluir este lançamento?'
                )
            ),
            array(
                'label' => '<i class="fa fa-mail-reply"></i> Voltar para lista',
                'url' => array('admin'),
                'htmlOptions' => array('class' => 'default')
            ),    
        )); ?>

    
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
        array(
            'name' => 'tipo',
            'value' => $model->tipotext,
        ),
        array(
            'name' => 'status',
            'value' => $model->statustext,
        ),
        'data_vencimento',
        'data_operacao',
        'data_cadastro',
        'data_alteracao',
        'valor',
        'valor_operacao',
        array(
			'name' => 'usuario',
			'type' => 'raw',
			'value' => $model->usuario !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->usuario)), array('usuario/view', 'id' => GxActiveRecord::extractPkValue($model->usuario, true))) : null,
        ),
	),
)); ?>
</div>
    </div>