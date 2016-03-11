<?php

class Training_Practice_BlockController extends Mage_Core_Controller_Front_Action{

	public function testAction(){								// /training/practice/test
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

	public function customBlockAction(){						// /training/practice/custom

		$block = $this->getLayout()->createBlock('training_practice/example');
		$this->getResponse()->setBody($block->toHtml());

	}

	public function templateBlockAction(){						// /training/practice/templateBlock
		$block = $this->getLayout()->createBlock('core/template');
		$block->setTemplate('training/practice/example.phtml');
		$this->getResponse()->setBody($block->toHtml());;
	}

	public function registryAction(){
		Mage::register('FORTRESS_LOCATION','In the Forbidden Forest');
		$block = $this->getLayout()
		->createBlock('training_practice/registry')
		->setTemplate('training/practice/registry.phtml');
		$this->getResponse()->setBody($block->toHtml());
	}

	public function textListAction(){
		$listBlock = $this->getLayout()->createBlock('core/text_list');
		$blockA = $this->getLayout()->createBlock('core/text','block.a')->setText('<p>Example block A.</p>');
		$blockB = $this->getLayout()->createBlock('core/text','block.b')->setText('<p>Example block B.</p>');
		$listBlock->insert($blockA)->insert($blockB);
		$this->getResponse()->setBody($listBlock->toHtml());
	}



}



