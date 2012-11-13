<?php
/*
| -------------------------------------------------------------------
|  Native Auto-load
| -------------------------------------------------------------------
| 
| Nothing to do with config/autoload.php, this allows PHP autoload to work
| for base controllers and some third-party libraries.
|
*/
function __autoload($class)
{
	if(strpos($class, 'CI_') !== 0)
	{
		// Is this a presenter? (This just checks to see if $class "ends with" _presenter.
		if(ends_with($class, '_presenter'))
		{
			// Yep, it's a presenter. Cool!
			@include_once (APPPATH . 'presenters/' . $class . EXT);
		}
		else
		{
			// Not a presenter. Check the core folder.
			@include_once (APPPATH . 'core/' . $class . EXT);
		}
	}
}




if(! function_exists('ends_with'))
{
	function ends_with($search, $substring, $case_sensitive=FALSE)
	{
		if(! $case_sensitive)
		{
			$search = strtolower($search);
			$substring = strtolower($substring);
		}
		
		$search = substr($search, strlen($search) - strlen($substring));
		
		return $search === $substring;
	}
}