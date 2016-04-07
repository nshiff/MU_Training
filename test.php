<?php


include 'app/Mage.php';
Mage::setIsDeveloperMode(true);
Mage::app();

$model = Mage::getModel('training_distributor/distributor');
//$resource = Mage::getResourceModel('training_distributor/distributor');
//$collection = Mage::getResourceModel('training_distributor/distributor_collection');

echo('hi');




