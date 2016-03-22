<?php

class Training_Practice_PracticeController extends Mage_Core_Controller_Front_Action{

	// This class defines handlers for this module's routes:
	// http://homepage.com/[This Module's Frontname]/practice
	// the subpath 'practice' is arbitrary
	// but by convention it follow the module's name.

	public function indexAction(){									// /practice
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are working * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

	public function sweetAction(){									// /practice/sweet
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are Sweet * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

	public function reallysweetAction(){							// /practice/reallysweet
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are Really Sweet * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

	public function handleAction()
	{
		$this->loadLayout('custom_handle')->renderLayout();
	}


}

