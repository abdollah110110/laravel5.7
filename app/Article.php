<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable=[
		'user_id',
		'title',
		'body',
	];

	public function scopeLastArticles( $query, $take = 3 ) {
		return $query->latest()->take( $take )->get();
	}

}
