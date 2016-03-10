<?php

class Training_Practice_ZebraController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
	$body = '';
	$body .= '------------------------------------------------<br>';
	$body .= '<span style="color:magenta">/ / / Hello from Zebra frontend controller / / /</span><br>';	
	$body .= '<span style="color:red">/ / / Hello from Zebra frontend controller / / /</span><br>';
	$body .= '<span style="color:yellow">/ / / Hello from Zebra frontend controller / / /</span><br>';	
	$body .= '<span style="color:lime">/ / / Hello from Zebra frontend controller / / /</span><br>';
	$body .= '<span style="color:blue">/ / / Hello from Zebra frontend controller / / /</span><br>';
	$body .= '------------------------------------------------<br>';
        $this->getResponse()->setBody($body);
    }

    public function pageLayoutXmlAction(){
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->getUpdate()->asString()
        );
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
    }


}



