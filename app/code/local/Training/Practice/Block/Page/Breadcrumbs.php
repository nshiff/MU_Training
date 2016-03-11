<?php



class Training_Practice_Block_Page_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs{
	protected function _prepareLayout(){
		$this->addCrumb('practice', array(
		'link' => 'http://example.com/',
		'label' => 'Exampleeeeeeeee Hello World Breadcrumbs',
		'title' => 'This is a hardcoded crumb'));
		return parent::_prepareLayout();
	}
}

