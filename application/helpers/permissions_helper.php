<?php

/*
 * Permissions helpers. These are generally built on a per-project basis.
 */

function get_user_id()
{
	$CI =& get_instance();
	return $CI->session->userdata('user_id');
}