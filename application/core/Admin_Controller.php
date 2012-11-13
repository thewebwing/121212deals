<?php

class Admin_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		/*
		 * Authentication is required. User must be logged in to access anything in this controller's subclasses.
		 */
		if(! $this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		{
			// You'll certainly want to pretty this up.
			show_error("You are not authorized to view this page.", 403, "403 Authorization Required");			
		}
	}
}