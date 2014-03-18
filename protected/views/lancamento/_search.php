<div class="wide form">

<?php $form = $this->beginWidget('GxActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'descricao'); ?>
		<?php echo $form->textField($model, 'descricao', array('maxlength' => 255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'documento'); ?>
		<?php echo $form->textField($model, 'documento', array('maxlength' => 20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'categoria_id'); ?>
		<?php echo $form->dropDownList($model, 'categoria_id', GxHtml::listDataEx(Categoria::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'tipo'); ?>
		<?php echo $form->textField($model, 'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'status'); ?>
		<?php echo $form->textField($model, 'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_vencimento'); ?>
		<?php echo $form->textField($model, 'data_vencimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_pagamento'); ?>
		<?php echo $form->textField($model, 'data_pagamento'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_cadastro'); ?>
		<?php echo $form->textField($model, 'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_alteracao'); ?>
		<?php echo $form->textField($model, 'data_alteracao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'valor'); ?>
		<?php echo $form->textField($model, 'valor', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'valor_pago'); ?>
		<?php echo $form->textField($model, 'valor_pago', array('maxlength' => 15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'usuario_id'); ?>
		<?php echo $form->dropDownList($model, 'usuario_id', GxHtml::listDataEx(Usuario::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
