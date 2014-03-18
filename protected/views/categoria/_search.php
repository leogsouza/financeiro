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
		<?php echo $form->label($model, 'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lft'); ?>
		<?php echo $form->textField($model, 'lft'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'rgt'); ?>
		<?php echo $form->textField($model, 'rgt'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'lvl'); ?>
		<?php echo $form->textField($model, 'lvl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_cadastro'); ?>
		<?php echo $form->textField($model, 'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_alteracao'); ?>
		<?php echo $form->textField($model, 'data_alteracao'); ?>
	</div>

	<div class="row buttons">
		<?php echo GxHtml::submitButton(Yii::t('app', 'Search')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
