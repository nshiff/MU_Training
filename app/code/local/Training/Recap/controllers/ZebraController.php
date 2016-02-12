<?php

class Training_Recap_ZebraController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $this->getResponse()->setBody('/ / / Hello I\'m a zebra / / /');
    }

    public function pageLayoutXmlAction(){
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->getUpdate()->asString()
        );
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
    }


}



