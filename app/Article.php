<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;
use App\User;
use App\Comment;
use App\Tag;

class Article extends Model {

	protected $fillable = [
		'user_id',
		'title',
		'slug',
		'body',
	];

	public function getCreatedAtAttribute($value) {
		$v = new Verta($value);
		return $v;
	}

	public function getUpdatedAtAttribute($value) {
		$v = new Verta($value);
		return $v;
	}

	public function scopeLastArticles( $query ) {
		return $query->latest()->take( 4 )->get();
	}

	public function user() {
		return $this->belongsTo(User::class);
	}

	public function comments() {
		return $this->hasMany(Comment::class);
	}

	public function tags() {
		return $this->belongsToMany(Tag::class);
	}

}
