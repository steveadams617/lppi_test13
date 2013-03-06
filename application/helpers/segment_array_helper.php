<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('fill_default_values'))
{
	function fill_default_values($array, $default_values)
	{
		foreach ($default_values as $key => $value) {
			if (!isset($array[$key])){
					$array[$key] = $value;
			}
		}
	    return $array;
	}	
	
	function uri_segments($segments)
	{
		$uri_segments = '';
		foreach ($segments as $key => $value) {
			if ($value){
				$uri_segments .= '/' . $key . '/' . $value;
			}
		}
	    return $uri_segments;
	}	
}

