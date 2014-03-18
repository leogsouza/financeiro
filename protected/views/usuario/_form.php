<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'usuario-form',
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
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model, 'email', array('maxlength' => 70)); ?>
		<?php echo $form->error($model,'email'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model, 'login', array('maxlength' => 20)); ?>
		<?php echo $form->error($model,'login'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model, 'senha', array('maxlength' => 80)); ?>
		<?php echo $form->error($model,'senha'); ?>
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


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->