<?php
 
class IgorS04_IsInBlock_Model_Resource_Mysql4_Setup extends Mage_Eav_Model_Entity_Setup
{
 /**
     * @return array
     */
    public function getDefaultEntities()
    {
        return array(
                'customer' => array(
                    'entity_model'          =>'customer/customer',
                    'table'                 => 'customer/entity',
                    'increment_model'       => 'eav/entity_increment_numeric',
                    'increment_per_store'   => false,

                'attribute_model'                => 'customer/attribute',
                'additional_attribute_table'     => 'customer/eav_attribute',
                'entity_attribute_collection'    => 'customer/attribute_collection',

                    'attributes' => array(
                        'isinblock' => array(
                            'type'          => 'int',
                            'input'         => 'select',
                            'label'         => 'Is In Block',
                            'visible'       => false,
                            'required'      => false,
                            'position'      => 	180,

	                    'sort_order'         => 180,
	                    'system'             => false,
			    'admin_checkout'     => 1,
                            'option'             => array('values' => array('on', 'off'))
                        )
                    )
                )
            );

	}
}
