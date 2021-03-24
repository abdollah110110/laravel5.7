<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use Carbon\Carbon;

class ArticleController extends Controller {

	public function index() {
		$articles = Article::latest()->paginate(6);
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function userArticles(User $user) {
		$articles = $user->articles()->get();
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function latest() {
		$articles = Article::lastArticles();
		return view( 'articles.latest', compact( 'articles' ) );
	}

	public function show( Article $article ) {
		return view( 'articles.show', compact( 'article' ) );
	}

	public function create() {
		return view( 'articles.create' );
	}

	public function store() {
		$this->validate( request(), [
			'title' => 'required',
			'body' => 'required|min:50',
		] );

		$title = request( 'title' ) . rand( 1000, 9999 );
		Article::create( [
			'user_id' => 4,
			'title' => $title,
			'slug' => str_slug( $title ),
			'body' => request( 'body' ),
		] );
		return redirect( route( 'articles.latest' ) );
	}

	public function update( Article $article ) {
		$title = 'Title Updated ' . rand( 1000, 9999 );
		$article->update( [
			'title' => $title,
			'slug' => str_slug( $title ),
		] );

		$articles = Article::lastArticles();
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function delete( Article $article ) {
		$article->delete();

		$articles = Article::lastArticles();
		return view( 'articles.articles', compact( 'articles' ) );
	}

}
