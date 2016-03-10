<?php

class Training_Practice_BlockController extends Mage_Core_Controller_Front_Action{

	public function testAction(){
		$message = 'you have reached the matrix';
		$body = '';
		$body .= '------------------------------------------------<br>';
		$body .= '<span style="color:magenta">/ / / '	. $message . ' / / /</span><br>';	
		$body .= '<span style="color:red">/ / / '	. $message . ' / / /</span><br>';
		$body .= '<span style="color:yellow">/ / / '	. $message . ' / / /</span><br>';	
		$body .= '<span style="color:lime">/ / / '	. $message . ' / / /</span><br>';
		$body .= '<span style="color:blue">/ / / '	. $message . ' / / /</span><br>';
		$body .= '------------------------------------------------<br>';
		$this->getResponse()->setBody($body);
	}

	public function customBlockAction(){

		$block = $this->getLayout()->createBlock('training_practice/example');
		$this->getResponse()->setBody($block->toHtml());

	}

	public function templateBlockAction(){
		$block = $this->getLayout()->createBlock('core/template');
		$block->setTemplate('training/practice/example.phtml');
		$this->getResponse()->setBody($block->toHtml());;
	}

}



