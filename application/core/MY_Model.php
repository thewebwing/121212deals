<?php
require_once(dirname(__FILE__) . '/JR_Model.php');

class MY_Model extends JR_Model
{
	/*
	 * Now I can safely add stuff here, without having my changes overwritten when a new MY_Model from Jamie Rumbelow comes out!
	 */
	
	public $protected_attributes = array('id'); // Should never be actually CHANGING an id (primary key). This applies to all models that inherit MY_Model.
}
