<?php

$this->breadcrumbs = array(
	$model->label(2) => array('index'),
	Yii::t('app', 'Manage'),
);

$this->pageTitle = Yii::t('app', 'Manage') . ' ' . GxHtml::encode($model->label(2));
$this->menu = array(
		array('label'=>Yii::t('app', 'List') . ' ' . $model->label(2), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create') . ' ' . $model->label(), 'url'=>array('create')),
	);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('lancamento-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="row">
    <div class="col-md-12 margin-bottom-10">
        <?php echo TbHtml::buttonGroup(array(
            array(
                'label' => '<i class="fa fa-plus"></i> Inserir Lançamento', 
                'url' => array('create'),    
                'htmlOptions' =>array('class' => 'green')
        ))); ?>

    
    </div>
    <div class="col-md-8 margin-bottom-10">
    <?php // echo GxHtml::link(Yii::t('app', 'Advanced Search'), '#', array('class' => 'search-button')); ?>
   
    <div class="search-form" style="display: none">
        <?php $this->renderPartial('_search', array(
            'model' => $model,
        )); ?>
    </div><!-- search-form -->

    <?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
        'id' => 'lancamento-grid',
        'fixedHeader' => true,
        'type' => 'striped bordered condensed',
        'responsiveTable' => true,
        'dataProvider' => $model->search(),
        'filter' => $model,
        'template' => "{items}{pager}\n{extendedSummary}",
        'columns' => array(
            'data_vencimento',
            'descricao',
            array(
                'name' => 'valor',
                'htmlOptions'=> array('class' => 'text-right',),
                'cssClassExpression'=> function($row, $data) {
                    // switch($data->project_req_status) {
                    switch(GxHtml::valueEx($data,'tipo')) {
                        case Lancamento::TIPO_DESPESA:
                            return 'texto-despesa bold';
                        case Lancamento::TIPO_RECEITA:
                            return 'texto-receita bold';
                        default:
                        return '';
                    } 
                },
                'footer' => $model->getTotalSaldo(),
            ),
            array(
                'name' => 'status',
                'value' => '$data->statuslabeltext',
                'filter' => $model->statusoptions,
                'type' => 'html',
                'htmlOptions' => array('class' => 'text-center','width' => '10%'),
            ),           
            array(
                'class' => 'TbButtonColumn',
                'template' => "{view}  {update}  {delete}",
                //'htmlOptions' => array('style' => 'width:17%'),
                'buttons' => array(
                    'view' => array(
                        'label' => '<i class="fa fa-search"></i>',
                        'options' => array('title' => 'Visualizar'),
                        'imageUrl' => false,
                        'icon' =>false,
                    ),
                    'update' => array(
                        'label' => '<i class="fa fa-pencil"></i>',
                        'options' => array('title' => 'Editar'),
                        'icon' => false,
                        'imageUrl' => false,
                    ),
                    'delete' => array(
                        'label' => '<i class="fa fa-trash-o"></i>',
                        'options' => array( 'title' => 'Excluir'),
                        'icon' => false,
                        'imageUrl' => false,
                    )
                )
            ),
        ),
        'pager' => array(
            'class' => 'bootstrap.widgets.TbPager',
            'htmlOptions' => array(
                'listOptions' => array(
                    'class' =>'pagination',
                ),
            )
        )
    )); ?>
    </div>
</div>


