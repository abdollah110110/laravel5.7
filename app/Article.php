<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
		'user_id',
		'title',
		'body',
	];

	public function scopeLastArticles( $query ) {
		return $query->latest()->take( 3 )->get();
	}

}
