<?php



class Training_Distributor_Model_Distributor extends Mage_Core_Model_Abstract{

    protected function _construct(){

        // Set the resource model and set the collection class
        // as resource + '_collection'

        $this->_init('training_distributor/distributor');

    }



}
