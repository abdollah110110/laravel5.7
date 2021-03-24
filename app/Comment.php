<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;

class Comment extends Model {
	protected $fillable=[
		'article_id',
		'name',
		'body',
	];

	public function getCreatedAtAttribute($value) {
		$v = new Verta($value);
		return $v;
	}

}
