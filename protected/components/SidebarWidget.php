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
    //put your code here
    public function init()
    {
        
    }
    
    public function run()
    {
        $this->render('sidebar');
    }
}
