<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- add "navbar-no-scroll" class to disable the scrolling of the sidebar menu -->
        <!-- BEGIN SIDEBAR MENU -->
        <?php $this->widget('application.widgets.LMenu', array(
            'htmlOptions'=>array('class'=>'page-sidebar-menu'),
            'encodeLabel'=>false,
            'items'=>$this->menu,
            'activateParents'=>true,
            'activateItems' => true,
        ));        
        ?>        
        <!-- END SIDEBAR MENU -->
    </div>
</div>