<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('descricao')); ?>:
	<?php echo GxHtml::encode($data->descricao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('documento')); ?>:
	<?php echo GxHtml::encode($data->documento); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('categoria_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->categoria)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('tipo')); ?>:
	<?php echo GxHtml::encode($data->tipo); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('status')); ?>:
	<?php echo GxHtml::encode($data->status); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_vencimento')); ?>:
	<?php echo GxHtml::encode($data->data_vencimento); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('data_pagamento')); ?>:
	<?php echo GxHtml::encode($data->data_pagamento); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:
	<?php echo GxHtml::encode($data->data_cadastro); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('data_alteracao')); ?>:
	<?php echo GxHtml::encode($data->data_alteracao); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valor')); ?>:
	<?php echo GxHtml::encode($data->valor); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('valor_pago')); ?>:
	<?php echo GxHtml::encode($data->valor_pago); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('usuario_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->usuario)); ?>
	<br />
	*/ ?>

</div>