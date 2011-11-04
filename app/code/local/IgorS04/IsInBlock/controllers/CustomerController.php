<?php

#require_once Mage::getModuleDir('controllers', 'Mage_Adminhtml_Customer').DS.'CustomerController.php';
require_once("Mage/Adminhtml/controllers/CustomerController.php");


class IgorS04_IsInBlock_CustomerController
extends Mage_Adminhtml_CustomerController
{
   public function massAddIsinblockAction()
    {
        $customersIds = $this->getRequest()->getParam('customer');
	if(!is_array($customersIds)) {
             Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select customer(s).'));
        } else {
            try {
		   
                foreach ($customersIds as $customerId) {
	           $customer = Mage::getModel('customer/customer')->load($customerId);
                   $customer->setIsinblock(1);  
		   $customer->getResource()->saveAttribute($customer, 'isinblock');  

                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('adminhtml')->__(
                        'Total of %d record(s) were deleted.', count($customersIds)
                    )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

   public function massRemIsinblockAction()

    {
        $customersIds = $this->getRequest()->getParam('customer');
	if(!is_array($customersIds)) {
             Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select customer(s).'));
        } else {
            try {
		   
                foreach ($customersIds as $customerId) {
  	            $customer = Mage::getModel('customer/customer')->load($customerId);
                    $customer->setIsinblock(0);
                    $customer->save();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('adminhtml')->__(
                        'Total of %d record(s) were deleted.', count($customersIds)
                    )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }
}
