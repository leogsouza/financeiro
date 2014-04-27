<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SidebarWidget
 *
 * @author lsouza
 */
class SidebarWidget extends CWidget
{
    public $menu = array();
    //put your code here
    public function init()
    {
        $this->menu = array(
            array(
                'label' => '<div class="sidebar-toggler hidden-phone"></div>',
                'itemOptions' => array('class' => 'sidebar-toggler-wrapper'),
            ),
            array(
                'label' => '<i class="fa fa-home"></i>'
                    . '<span class="title">Dashboard</span>', 
                'url'=>  app()->homeUrl,
                'active' => app()->controller->route == 'site/index',
            ),
            array(
                'label' => '<i class="fa fa-list"></i>'
                    . '<span class="title">Categorias</span>', 
                'url'=>array('/categoria'),
                'active' => app()->controller->uniqueId == 'categoria',
            ),
            array(
                'label' => '<i class="fa fa-usd"></i><span class="title">'
                    . 'Lançamentos</span>', 
                'url'=>array('/lancamento'),
                'active' => app()->controller->uniqueId == 'lancamento',
            ),
            array(
                'label' => '<i class="fa fa-group"></i>'
                    . '<span class="title">Usuários</span>', 
                'url'=>array('/usuario'),
                'active' => app()->controller->uniqueId == 'usuario',
                
            ),
        );
        
    }
    
    public function run()
    {
        $this->render('sidebar');
    }
}
