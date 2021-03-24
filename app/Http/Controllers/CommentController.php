<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentController extends Controller {

	public function store( Article $article ) {
		$this->validate( request(), [
			'name' => 'required',
			'body' => 'required|min:3',
		] );
		
		Comment::create( [
			'article_id' => $article->id,
			'name' => request( 'name' ),
			'body' => request( 'body' ),
		] );

		return back();
	}

}
