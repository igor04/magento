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
                    'attributes' => array(
                        'isinblock' => array(
                            'type'          => 'int',
                            'input'         => 'boolean',
                            'label'         => 'Is In Block',
                            'visible'       => true,
                            'required'      => false,
                            'position'      => 69,
                        ),
                    ),
                ),
            );

	}
}
