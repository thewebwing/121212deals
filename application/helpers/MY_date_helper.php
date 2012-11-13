<?php

function unix_to_mysql($timestamp='')
{
	if(! $timestamp)
		$timestamp = strtotime('now');
	
	return date('Y-m-d H:i:s', $timestamp);
}

function time_ago($past_time)
{
	return strtolower(current(explode(',', timespan($past_time, strtotime('now')))));
}