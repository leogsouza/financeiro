<!--
 /**
  * Form for JsTreeBehavior model.
  *
  * Date: 1/29/13
  * Time: 12:00 PM
  *
  * @author: Spiros Kabasakalis <kabasakalis@gmail.com>
  * @link http://iws.kabasakalis.gr/
  * @link http://www.reverbnation.com/spiroskabasakalis
  * @copyright Copyright &copy; Spiros Kabasakalis 2013
  * @license http://opensource.org/licenses/MIT  The MIT License (MIT)
  * @version 1.0.0
  */
  -->

  <?php      $val_error_msg = Yii::t('global', "Error.$modelClassName  não foi salvo.");
                   $val_success_message = ($model->isNewRecord) ?
                   Yii::t('global', "$modelClassName foi criada com sucesso.") :
                    Yii::t('global', "$modelClassName  foi atualizada com sucesso.");
?>
  <div id="success-note" class="alert alert-success"
     style="display:none;">
    <?php   echo $val_success_message;  ?>
</div>

<div id="error-note" class="alert alert-error"
     style="display:none;">
    <?php   echo $val_error_msg;  ?>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-reorder"></i>Lançamento
        </div>
    </div>
    <div id="ajax-form" class="portlet-body form">
        
        <?php
    $formId = "$modelClassName-form";

    $actionUrl=($model->isNewRecord)?
     (! isset($_POST['create_root'])?CController::createUrl($this->id.'/createnode'):CController::createUrl($this->id.'/createRoot')):
    CController::createUrl($this->id.'/updatenode');

    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => $formId,
            'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
            //  'htmlOptions' => array('enctype' => 'multipart/form-data'),
            'action' => $actionUrl,
            // 'enableAjaxValidation'=>true,
            'enableClientValidation' => true,
            'focus' => array($model, 'nome'),
            'errorMessageCssClass' => 'alert alert-error',
            'clientOptions' => array(
                'validateOnSubmit' => true,
                'validateOnType' => false,
                'inputContainer' => '.control-group',
                'errorCssClass' => 'error',
                'successCssClass' => 'success',
                'afterValidate' => 'js:function(form,data,hasError){$.js_afterValidate(form,data,hasError);  }',
            ),
       ));
    ?>
       
            <div class="form-body">
                <?php echo $form->errorSummary($model,
                    '<div style="font-weight:bold">Please correct these errors:</div>',
                     NULL,
                     array('class' => 'alert alert-error')
                ); ?>
                <div class="form-group">
                    <?php echo $form->labelEx($model, 'nome', array('class' => 'control-label col-md-3')); ?>
                    <div class="col-md-4">
                        <?php
                            if(!$model->isNewRecord) {
                                $name = $model->nome;
                            } elseif(isset($_POST['name'])) {
                                $name = $_POST['name'];
                            } else {
                                $name = '';
                            }                ?>
                        <?php echo $form->textField($model, 'nome', array('value'=>$name,'class' => 'form-control', 'size' => TbHtml::INPUT_SIZE_MEDIUM, 'maxlength' => 128)); ?>
                        <p class="help-block"><?php echo $form->error($model, 'nome'); ?></p>
                    </div>
                </div>
                
                <div class="form-group">
                    <?php echo $form->labelEx($model,'descricao',array('class' => 'control-label col-md-3'));?>
                    <div class="col-md-4">
                        <?php echo $form->textField($model,'descricao',
                            array('class' => 'form-control input-medium')); ?>
                        <?php echo $form->error($model,'descricao'); ?>
                    </div>
                </div>
            </div>
            <input type="hidden" name="YII_CSRF_TOKEN"
               value="<?php echo Yii::app()->request->csrfToken; ?>"/>
            <input type="hidden" name= "parent_id" value="<?php echo isset($_POST['parent_id'])?$_POST['parent_id']:''; ?>"  />

            <?php  if (!$model->isNewRecord): ?>
            <input type="hidden" name="update_id"
                   value="<?php echo $model->id; ?>"/>
            <?php endif; ?>
            <div class="form-actions">
                <?php   echo CHtml::submitButton($model->isNewRecord ? Yii::t('global', 'Enviar')
                                                         : Yii::t('global', 'Salvar'),
                                                 array('class' => 'btn btn-large pull-right')); ?>
            </div>
        <?php
        $this->endWidget();
        ?>
    </div>
</div>
