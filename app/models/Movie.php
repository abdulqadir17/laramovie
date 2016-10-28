<?php

/**
* Movie Model
*/
class Movie extends Eloquent
{
	protected $guarded = ['id'];

	/**
	 * Movie belongs to many (many-to-many) .
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function categories()
	{
		// belongsToMany(RelatedModel, pivotTable, thisKeyOnPivot = movie_id, otherKeyOnPivot = _id)
		return $this->belongsToMany('Category', 'movie_category', 'movie_id', 'category_id');
	}

}