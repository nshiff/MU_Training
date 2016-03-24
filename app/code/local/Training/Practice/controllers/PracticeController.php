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

	public function rootCategoryListAction(){
		$stores = Mage::getResourceModel('core/store_collection');
		$rootIds = $stores->walk('getRootCategoryId');
		var_dump($rootIds);
		
		$cats = Mage::getResourceModel('catalog/category_collection');
		
		$cats->addIdFilter($rootIds);
		$cats->addAttributeToSelect('name');

		$this->getResponse()->setHeader('Content-Type', 'text/plain');
		
		foreach ($stores as $store){
			$this->getResponse()->appendBody($store->getName() . ": ");
			$category = $cats->getItemById($store->getRootCategoryId());
			$this->getResponse()->appendBody($category->getName() . "\n");
		}
	}
	
	
}

