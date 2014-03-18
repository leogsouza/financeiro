<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'categoria-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model, 'nome', array('maxlength' => 45)); ?>
		<?php echo $form->error($model,'nome'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lft'); ?>
		<?php echo $form->textField($model, 'lft'); ?>
		<?php echo $form->error($model,'lft'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'rgt'); ?>
		<?php echo $form->textField($model, 'rgt'); ?>
		<?php echo $form->error($model,'rgt'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'lvl'); ?>
		<?php echo $form->textField($model, 'lvl'); ?>
		<?php echo $form->error($model,'lvl'); ?>
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

		<label><?php echo GxHtml::encode($model->getRelationLabel('lancamentos')); ?></label>
		<?php echo $form->checkBoxList($model, 'lancamentos', GxHtml::encodeEx(GxHtml::listDataEx(Lancamento::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->