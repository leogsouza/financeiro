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
                <h3 class="form-section">Dados do usuário</h3>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'nome',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'nome',
                                    array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'nome'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'email',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'email',
                            array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'email'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <?php echo $form->labelEx($model,'login',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'login',
                            array('class' => 'form-control')); ?>
                        <?php echo $form->error($model,'login'); ?>
                    </div>
                </div>
                
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

