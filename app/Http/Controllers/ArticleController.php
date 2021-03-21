<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller {

	public function index() {
		$articles = Article::latest()->get();
		return view( 'articles', compact( 'articles' ) );
	}

	public function latest() {
		$articles = Article::lastArticles();
		return view( 'articles', compact( 'articles' ) );
	}

	public function show($article) {
		return view( 'article-show', compact( 'article' ) );
	}

	public function create() {
		Article::create( [
			'user_id' => 4,
			'title' => 'Title Inserted ' . rand( 1000, 9999 ),
			'body' => 'Iure modi perferendis alias dolorum vitae repellendus blanditiis. Nesciunt mollitia veritatis quo illo ut. Ad rerum ab perferendis.',
		] );

		$articles = Article::lastArticles();
		return view( 'articles', compact( 'articles' ) );
	}

	public function update( Article $article ) {
		$article->update( [
			'title' => 'Title Updated ' . rand( 1000, 9999 ),
		] );

		$articles = Article::lastArticles();
		return view( 'articles', compact( 'articles' ) );
	}

	public function delete( Article $article ) {
		$article->delete();

		$articles = Article::lastArticles();
		return view( 'articles', compact( 'articles' ) );
	}

}
