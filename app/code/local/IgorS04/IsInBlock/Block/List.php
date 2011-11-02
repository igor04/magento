<?php
 
class IgorS04_IsInBlock_Block_List extends Mage_Directory_Block_Data
{
    protected function getForm(){

	$data = Mage::getModel('customer/customer')
	    ->getCollection()
	    ->addFieldToFilter('isinblock',array('eq'=>'1'))
	    ->getData();

	return var_dump($data);
    }
}
