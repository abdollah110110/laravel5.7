<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
		'user_id',
		'title',
		'slug',
		'body',
	];

	public function scopeLastArticles( $query ) {
		return $query->latest()->take( 4 )->get();
	}

}
