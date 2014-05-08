<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LMenu
 *
 * @author Leonardo
 */
Yii::import('zii.widgets.CMenu');
class LMenu extends CMenu
{
    //put your code here
    public function renderMenuItem($item)
    {
        if($item['active'] === true) {
            $item['label'] .= '<span class="selected"></span>';
        }
        //$item['label'] = 'abc';
        return parent::renderMenuItem($item);
    }
}
