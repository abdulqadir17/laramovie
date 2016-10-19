<?php

/**
* Category Model
*/
class Category extends Eloquent
{
	protected $fillable = [
		'category_name', 'slug', 'description', 'parent_id', 'category_status'
	];
}