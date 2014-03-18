<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('nome')); ?>:
	<?php echo GxHtml::encode($data->nome); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lft')); ?>:
	<?php echo GxHtml::encode($data->lft); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('rgt')); ?>:
	<?php echo GxHtml::encode($data->rgt); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('lvl')); ?>:
	<?php echo GxHtml::encode($data->lvl); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:
	<?php echo GxHtml::encode($data->data_cadastro); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:
	<?php echo GxHtml::encode($data->data_alteracao); ?>
	<br />

</div>