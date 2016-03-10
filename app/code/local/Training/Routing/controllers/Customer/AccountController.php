<?php

require_once 'Mage/Customer/controllers/AccountController.php';

class Training_Routing_Customer_AccountController
    extends Mage_Customer_AccountController{


    public function loginPostAction(){
        $url = Mage::getUrl('catalog/category/view', array('id' => 4));
        $this->_getSession()->setAfterAuthUrl($url);
        parent::loginPostAction();

    }

}

