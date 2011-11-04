<?php
 
class IgorS04_IsInBlock_Block_List extends Mage_Directory_Block_Data
{
	protected function getList(){
	
	$data = Mage::getModel('customer/customer');

	$customer_arr = $data->getCollection()
			     ->addFieldToFilter('isinblock',array('eq'=>'1'))
			     ->getData();

	$res_data = '';
	foreach($customer_arr as $key){
		$customer_data =  $data->load($key['entity_id']);
	
		$res_data .='<br>'.$customer_data->lastname.'&nbsp;'.$customer_data->firstname.'&nbsp;('.$customer_data->email.')';
	}



	return (empty($res_data))?'<br>Empty':$res_data;
    }
}
