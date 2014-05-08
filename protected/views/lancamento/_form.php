<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>Lançamento
        </div>
    </div>
    <div class="portlet-body form">
        
        <?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'htmlOptions' => array('class' => 'form-horizontal'),
        ));
        ?>
            <div class="form-body">
                <?php echo $form->errorSummary($model); ?>
                <h3 class="form-section">Dados do documento</h3>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'descricao',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'descricao',
                                    array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'descricao'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'documento',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'documento',
                            array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'documento'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'categoria_id',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->dropDownList($model,'categoria_id',
                            Categoria::getCategoriaOptions(),
                            array('class' => 'form-control','encode' => false)); ?>
                        <?php echo $form->error($model,'categoria_id'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'tipo',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->radioButtonList($model,'tipo',
                            $model->getTipoOptions(),
                            array(
                                'class' => 'form-control',
                                //'container' => 'div',
                                'containerOptions' => array(
                                    'class' => 'radio-list',
                                ),
                                'labelOptions' => array(
                                    'class' => 'radio-inline',
                                )
                            )); ?>
                        <?php echo $form->error($model,'tipo'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'status',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->dropDownList($model,'status',
                            $model->getStatusOptions(),
                            array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'status'); ?>
                    </div>
                </div>		
		
                <div class="form-group">
                    <?php echo $form->labelEx($model,'data_vencimento',array('class' => 'control-label col-md-3')); ?>
                    <div class="col-md-4">
                        <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                            'model' => $model,
                            'attribute' => 'data_vencimento',
                            'pluginOptions' => array(
                                'format' => 'dd/mm/yyyy',
                                'language' =>'pt-BR',
                            ),
                            'htmlOptions' => array('class' => 'form-control')
                        ));?>                
                        <?php echo $form->error($model,'data_vencimento'); ?>
                    </div>
                </div><!-- row -->
                <div class="form-group">
                    <?php echo $form->labelEx($model,'data_operacao',array('class' => 'control-label col-md-3')); ?>
                    <div class="col-md-4">
                        <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                                'model' => $model,
                                'attribute' => 'data_operacao',
                                'pluginOptions' => array(
                                    'format' => 'dd/mm/yyyy',
                                    'language' =>'pt-BR',
                                ),
                                'htmlOptions' => array('class' => 'form-control')
                            ));
                        ?>
                        <?php echo $form->error($model,'data_operacao'); ?>
                    </div>
                </div><!-- row -->		
		
                <div class="form-group">
                    <?php echo $form->labelEx($model,'valor',array('class' => 'control-label col-md-3')); ?>
                    <div class="col-md-4">
                        <?php $this->widget('yiiwheels.widgets.maskmoney.WhMaskMoney', array(
                            'model' => $model,
                            'attribute' => 'valor',
                            'pluginOptions' => array(
                                'thousands' =>'.',
                                'decimal' => ',',
                                'prefix' => 'R$ ',
                            ),
                            'htmlOptions' => array('class' => 'form-control')
                        ));?>
                        <?php echo $form->error($model,'valor'); ?>
                    </div>
                </div><!-- row -->
                <div class="form-group">
                    <?php echo $form->labelEx($model,'valor_operacao',array('class' => 'control-label col-md-3')); ?>
                    <div class="col-md-4">
                        <?php $this->widget('yiiwheels.widgets.maskmoney.WhMaskMoney', array(
                            'model' => $model,
                            'attribute' => 'valor_operacao',
                            'pluginOptions' => array(
                                'thousands' =>'.',
                                'decimal' => ',',
                                'prefix' => 'R$ ',
                            ),
                            'htmlOptions' => array('class' => 'form-control')
                        ));?>
                        <?php echo $form->error($model,'valor_operacao'); ?>
                    </div>
                </div><!-- row -->
            </div>
            <?php echo TbHtml::formActions(array(
                TbHtml::submitButton('<i class="fa fa-save"></i> Salvar', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
                TbHtml::link('Cancelar',array('admin'),array('class' => 'btn default','color' => TbHtml::BUTTON_COLOR_DEFAULT)),
            ),array('class' => 'nobg')); ?>
        <?php
        $this->endWidget();
        ?>
    </div>
</div>
<script>


$("input[name='<?php echo CHtml::activeName($model, 'tipo');?>']").on('change',function(){
    if($(this).val() == <?php echo Lancamento::TIPO_DESPESA ?>) {
        $("label[for='<?php echo CHtml::activeId($model, 'data_operacao')?>']").text('Data de Pagamento');
        $("label[for='<?php echo CHtml::activeId($model, 'valor_operacao')?>']").text('Valor Pago');
    } else {
        $("label[for='<?php echo CHtml::activeId($model, 'data_operacao')?>']").text('Data de Recebimento');
        $("label[for='<?php echo CHtml::activeId($model, 'valor_operacao')?>']").text('Valor Recebido');
    }
   
});
</script>