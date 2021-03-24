<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentController extends Controller {

	public function store( Article $article ) {
		$this->validate( request(), [
			'body' => 'required|min:3',
		] );

		Comment::create( [
			'user_id' => auth()->user()->id,
			'article_id' => $article->id,
			'name' => (auth()->check() ? auth()->user()->name : request( 'name' )),
			'body' => request( 'body' ),
		] );

		return back();
	}

}
