<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Tag;
use Carbon\Carbon;

class ArticleController extends Controller {

	public function index() {
		$articles = Article::latest()->paginate( 6 );
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function userArticles( User $user ) {
		$articles = $user->articles()->get();
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function tagArticles( Tag $tag ) {
		$articles = $tag->articles()->get();
		return view( 'articles.articles', compact( 'articles' ) );
	}

	public function latest() {
		$articles = Article::lastArticles();
		return view( 'articles.latest', compact( 'articles' ) );
	}

	public function show( Article $article ) {
		$tags = $article->tags;
		return view( 'articles.show', compact( 'article', 'tags' ) );
	}

	public function create() {
		$tags = Tag::all();
		return view( 'articles.create', compact( 'tags' ) );
	}

	public function store() {
		$this->validate( request(), [
			'title' => 'required',
			'body' => 'required|min:50',
		] );


		$title = request( 'title' ) . rand( 1000, 9999 );

		$article = Article::create( [
				'user_id' => auth()->user()->id,
				'title' => $title,
				'slug' => str_slug( $title ),
				'body' => request( 'body' ),
			] );

		$article->tags()->attach( request( 'tags' ) );

		return redirect( route( 'articles.latest' ) );
	}

	public function edit( Article $article ) {
		$tags = Tag::all();
		return view( 'articles.edit', compact( 'article', 'tags' ) );
	}

	public function update( Article $article ) {
		$this->validate( request(), [
			'title' => 'required',
			'body' => 'required|min:50',
		] );

		$article->update( request( [ 'title', 'body' ] ) );

		$article->tags()->sync( request( 'tags' ) );

		$tags = $article->tags;
		return redirect( route( 'article.show', [ 'id' => $article->id ] ) )->with( 'article' )->with( 'tags' );
	}

	public function delete( Article $article ) {
		$article->delete();

		$articles = Article::lastArticles();
		return view( 'articles.articles', compact( 'articles' ) );
	}

}
