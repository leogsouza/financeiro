<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="page-content-wrapper">
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                <h3 class="page-title">
                    <?php echo $this->pageTitle; ?>
                </h3>
                <?php if(isset($this->breadcrumbs)):?>
                    <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
                        'links'=>$this->breadcrumbs,
                        'divider' => '<i class="fa fa-angle-right"></i>',
                        'homeLabel' => '<i class="fa fa-home"></i> Home',
                        'htmlOptions' => array('class' => 'page-breadcrumb breadcrumb'),
                        'encodeLabel' => false,
                    )); ?><!-- breadcrumbs -->
                <?php endif?>
                <?php //echo TbHtml::breadcrumbs($this->breadcrumbs); ?>
                <!-- <ul class="page-breadcrumb breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="index.html">
                            Home
                        </a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">
                            Dashboard
                        </a>
                    </li>
                    <li class="pull-right">
                        <div id="dashboard-report-range" class="dashboard-date-range tooltips" data-placement="top" data-original-title="Change dashboard date range">
                            <i class="fa fa-calendar"></i>
                            <span>
                            </span>
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </li>
                </ul>-->
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <?php echo $content; ?>
    </div>
</div>
<?php $this->endContent(); ?>