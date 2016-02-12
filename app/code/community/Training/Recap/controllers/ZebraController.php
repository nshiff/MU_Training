<?php

class Training_Recap_ZebraController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){

        $model = Mage::getModel('training_recap/sample');

        $body = '';
        $body .= 'Now featuring:';
        $body .= '<br>';
        $body .= get_class($model);


        $this->getResponse()->setBody($body);
    }


}



