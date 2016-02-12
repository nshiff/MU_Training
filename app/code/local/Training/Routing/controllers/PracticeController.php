<?php

class Training_Routing_PracticeController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        $this->getResponse()->setBody('Hello from Practice frontend controller');
    }

    public function pageLayoutXmlAction(){
		
		
		$bodyBefore = $this->getLayout()->getUpdate()->asString();
		$this->loadLayout();
		$bodyAfter = $this->getLayout()->getUpdate()->asString();
		
		$this->getResponse()->setBody($bodyAfter);
		$this->getResponse()->setHeader('Content-Type', 'text/plain');
		
		Mage::log('$bodyBefore: ' . $bodyBefore);
		Mage::log('$bodyAfter: ' . $bodyAfter);
		
		
    }


}



