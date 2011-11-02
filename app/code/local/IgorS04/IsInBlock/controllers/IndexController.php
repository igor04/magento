<?php

class IgorS04_IsInBlock_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){

	    $this->_title($this->__('IsInBlock'))->_title($this->__('Module'));
            $this->loadLayout();
            $this->renderLayout();
    }
}

