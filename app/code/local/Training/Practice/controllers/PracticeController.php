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

	public function rootCategoryListAction(){							// /practice/rootCategoryList
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
			// Output category tree
			$this->_displayChildCategories($category);
		}
	}

	protected function _displayChildCategories($category){

		$resource = $category->getResource();

		// Different tablename getter for flat vs EAV
		if( Mage::helper('catalog/category_flat')->isEnabled() ){
			$table = $resource->getMainTable();
		}
		else{
			$table = $resource->getEntityTable();
		}

		// Retrieve the read adapter to work with the select object
		$select = $resource->getReadConnection()->select()
			->from($table, '*')
			->where('parent_id=?', $category->getId());

		// Join "name" attribute table if necessary
		if( ! Mage::helper('catalog/category_flat')->isEnabled()){
			$attribute = $resource->getAttribute('name');

			$attributeTable = $attribute->getBackend()->getTable();

			$select->joinInner(
				array($attributeTable),
				"{$table}.entity_id={$attributeTable}.entity_id " .
					"AND attribute_id={$attribute->getId()}",
				array('name' => 'value')
			);
		}

		// Retrieve results from database
		$rows = $resource->getReadConnection()->fetchAll($select);

		// Iterate, apply data, and call this method recursively
		foreach ($rows as $row){
			$childCat = Mage::getModel('catalog/category')->setData($row);

			$output = str_pad("", $childCat->getLevel() * 2, " ") .
				"{$childCat->getId()} {$childCat->getName()}\n";
			$this->getResponse()->appendBody($output);
			$this->_displayChildCategories($childCat);	// recursive call. "we have to go deeper!"



		}







	}



}

