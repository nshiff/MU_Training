<?php

class Training_Practice_WorkingController extends Mage_Core_Controller_Front_Action{

	// This class defines handlers for this module's routes:
	// http://homepage.com/[This Module's Frontname]/working

	public function indexAction(){									// /working
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are working * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

	public function sweetAction(){									// /working/sweet
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are Sweet * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

	public function reallysweetAction(){							// /working/reallysweet
		$body = '';
		$body .= '-------------------------------------<br>';
		$body .= ' * * * Things are Really Sweet * * *<br>';
		$body .= '-------------------------------------<br>';	
		$this->getResponse()->setBody($body);
	}

}

