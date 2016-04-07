<?php



class Training_Distributor_Model_Resource_Distributor extends Mage_Core_Model_Resource_Distributor{


    protected function _construct(){
        // Pass the tablename (handle) and primary key
        $this->_init('training_distributor/distributor', 'entity_id');
    }



}



