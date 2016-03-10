<?php

class Training_Routing_ExampleController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $this->getResponse()->setBody('Hello from Example frontend controller');
    }

    public function pageLayoutXmlAction(){
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->getUpdate()->asString()
        );
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
    }


}



