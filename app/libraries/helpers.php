<?php 

	function getSiteOptionByKey($key)
	{
		$options = App::make('options');
		// return $options[$key];
		return  (isset($options[$key])) ? $options[$key] : null ;
	}