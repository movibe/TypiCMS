<?php namespace TypiCMS\Models;

use Eloquent;

class ProjectTranslation extends Eloquent {
	
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects_translations';

	/**
	 * Observers
	 */
	public static function boot()
	{
		parent::boot();

		static::saving(function($model)
		{
			// slug = null si vide
			$model->slug = ($model->slug) ? $model->slug : null ;
		});

	}

}