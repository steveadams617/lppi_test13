<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('formatDate'))
{
	function formatDate($datetext, $format)
	{
		if ($datetext != NULL)
		{
			$ts = strtotime($datetext);
			return date($format, $ts);
		} else {
			return "";
		}	
	}	
}
if ( ! function_exists('MySQLDate'))
{	
	function MySQLDate($datetext)
	{
		if ($datetext) {
			$date = date_create($datetext);
			return date_format($date, 'Y-m-d');
		} else {
			return null;
		}
	}	
}
