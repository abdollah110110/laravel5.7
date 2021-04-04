<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	public $timestamps = false;
	protected $fillable = [
		'name',
		'category_id',
		'image',
		'active',
	];

	public function children() {
		return $this->hasMany( Category::class );
	}

}
