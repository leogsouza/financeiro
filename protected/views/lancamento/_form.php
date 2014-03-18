<div class="form">


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
		<?php echo $form->dropDownList($model, 'categoria_id', GxHtml::listDataEx(Categoria::model()->findAllAttributes(null, true))); ?>
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
		<?php echo $form->textField($model, 'data_vencimento'); ?>
		<?php echo $form->error($model,'data_vencimento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_pagamento'); ?>
		<?php echo $form->textField($model, 'data_pagamento'); ?>
		<?php echo $form->error($model,'data_pagamento'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_cadastro'); ?>
		<?php echo $form->textField($model, 'data_cadastro'); ?>
		<?php echo $form->error($model,'data_cadastro'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data_alteracao'); ?>
		<?php echo $form->textField($model, 'data_alteracao'); ?>
		<?php echo $form->error($model,'data_alteracao'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valor'); ?>
		<?php echo $form->textField($model, 'valor', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'valor'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'valor_pago'); ?>
		<?php echo $form->textField($model, 'valor_pago', array('maxlength' => 15)); ?>
		<?php echo $form->error($model,'valor_pago'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'usuario_id'); ?>
		<?php echo $form->dropDownList($model, 'usuario_id', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'usuario_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->