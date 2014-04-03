<div class="form">
<?php
    /*cs()->registerScriptFile(bu('js/jquery.maskMoney.js'));
    Yii::app()->clientScript->registerScript('maskMoney',
        "$('#".CHtml::activeId($model,'valor')."').maskMoney({prefix:'R$ ',thousands:'.',decimal:','});".
        "$('#".CHtml::activeId($model,'valor_pago')."').maskMoney({prefix:'R$ ',thousands:'.',decimal:','});"
    );*/
?>

<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'lancamento-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'documento'); ?>
		<?php echo $form->textField($model, 'documento', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'documento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'categoria_id'); ?>
		<?php echo $form->dropDownList($model, 'categoria_id', Categoria::getCategoriaOptions()); ?>
		<?php echo $form->error($model,'categoria_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model, 'tipo'); ?>
		<?php echo $form->error($model,'tipo'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model, 'status'); ?>
		<?php echo $form->error($model,'status'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_vencimento'); ?>
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model' => $model,
                'attribute' => 'data_vencimento',
                'pluginOptions' => array(
                    'format' => 'dd/mm/yyyy',
                    'language' =>'pt-BR',
                )
            ));
        ?>
		<?php //echo $form->textField($model, 'data_vencimento'); ?>
		<?php echo $form->error($model,'data_vencimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_pagamento'); ?>
		
        <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model' => $model,
                'attribute' => 'data_pagamento',
                'pluginOptions' => array(
                    'format' => 'dd/mm/yyyy',
                    'language' =>'pt-BR',
                )
            ));
        ?>
		<?php echo $form->error($model,'data_pagamento'); ?>
		</div><!-- row -->		
		
		<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
        <?php $this->widget('yiiwheels.widgets.maskmoney.WhMaskMoney', array(
            'model' => $model,
            'attribute' => 'valor',
            'pluginOptions' => array(
                'thousands' =>'.',
                'decimal' => ',',
                'prefix' => 'R$ ',
            )
        ));?>
		<?php echo $form->error($model,'valor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valor_pago'); ?>
		<?php $this->widget('yiiwheels.widgets.maskmoney.WhMaskMoney', array(
            'model' => $model,
            'attribute' => 'valor_pago',
            'pluginOptions' => array(
                'thousands' =>'.',
                'decimal' => ',',
                'prefix' => 'R$ ',
            )
        ));?>
		<?php echo $form->error($model,'valor_pago'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->