<?php

/**
 * This is our base presenter class. The constructor takes 2 parameters, $init and $model_name.
 * 
 * If $init is an object, then $model_name is not required. It just loads $this->_data with $init and calls it good.
 * If $init is a number then it's assumed to be an ID and uses $model_name to retrieve the DB row with this ID (primary key).
 * 
 * @author Mike Rogne
 *
 */
class MY_Presenter
{
	/**
	 * Our CodeIgniter object
	 * @var CI_Controller
	 */
	protected $_ci;
	
	/**
	 * Our presenter data. It's always an object (not array), and probably usually from a database, but not necessarily always.
	 * @var stdClass
	 */
	protected $_data;
	
	/**
	 * This is a base class that actual presenters will inherit from. This class is not meant to be instantiated.
	 */
	public function __construct($init, $model_name='')
	{
		$this->_ci =& get_instance();
		
		// Load the passed model if one was passed.
		if($model_name)
			$this->_ci->load->model($model_name);
		
		// If an object was passed, no need to retrieve from database. But if it's not an object, grab the data from DB. Assume $init is an ID.
		if(is_object($init))
			$this->_data = $init;
		else
		{
			if(! $model_name)
				show_error("Attempted to load " . get_class($this) . " without specifying model name.", 500, "Error");
			
			$this->_data = $this->_ci->{$model_name}->get($init);
		}
	}
	
	/**
	 * Tests to see whether the presenter was successfully initiated or not.
	 * An example case might be passing a user id and model name of "user_model", then calling exists() to see if the user exists.
	 */
	public function exists()
	{
		return empty($this->_data) ? FALSE : TRUE;
	}
	
	/**
	 * Magic method! This should be used to grab DB fields that do not have presenter methods.
	 */
	public function __get($name)
	{
		return $this->_data->{$name};
	}	
}