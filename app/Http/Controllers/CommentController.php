<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;
use Illuminate\Support\Facades\Mail;
use App\Mail\CommentMail;

class CommentController extends Controller {

	public function store( Article $article ) {
		$this->validate( request(), [
			'body' => 'required|min:3',
		] );

		$user = auth()->user();

		Comment::create( [
			'user_id' => auth()->user()->id,
			'article_id' => $article->id,
			'name' => (auth()->check() ? $user->name : request( 'name' )),
			'body' => request( 'body' ),
		] );

		Mail::to( $user->email )->send( new CommentMail( $user, request( 'body' ) ) );

		return back();
	}

}
