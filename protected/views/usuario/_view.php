<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('email')); ?>:
	<?php echo GxHtml::encode($data->email); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('login')); ?>:
	<?php echo GxHtml::encode($data->login); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('senha')); ?>:
	<?php echo GxHtml::encode($data->senha); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:
	<?php echo GxHtml::encode($data->data_cadastro); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:
	<?php echo GxHtml::encode($data->data_alteracao); ?>
	<br />

</div>