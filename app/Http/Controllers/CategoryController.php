<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {

	public function __construct() {
		$this->middleware( 'auth' )->except( 'index' );
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		if ( auth()->check() && auth()->user()->isAdmin === 1 ) {
			$categories = Category::orderBy( 'id', 'desc' )->get();
			return view( 'categories.index', compact( 'categories' ) );
		}
		else {
			$categories = Category::orderBy( 'name', 'asc' )->where( 'active', 1 )->get();
			return view( 'categories.index', compact( 'categories' ) );
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$categories = Category::orderBy( 'name', 'asc' )->where( 'category_id', null )->where( 'active', 1 )->get();
		return view( 'categories.create', compact( 'categories' ) );
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store( Request $request ) {
		$this->validate( request(), [
			'name' => 'required|unique:categories|string|min:3|max:40',
		] );
		$category = new Category();
		$category->create( [
			'name' => request( 'name' ),
			'category_id' => (request( 'categoryId' ) == 0 ? null : request( 'categoryId' )),
			'active' => (is_null( request( 'active' )) ? 0 : 1),
		] );
		return redirect( route( 'category.index') );
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function show( Category $category ) {
		return view( 'categories.show', compact( 'category' ) );
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function edit( Category $category ) {
		$categories = Category::orderBy( 'name', 'asc' )->where( 'category_id', null )->where( 'active', 1 )->get();
		return view( 'categories.edit', compact( 'category', 'categories' ) );
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function update( Request $request, Category $category ) {
		$this->validate( request(), [
			'name' => 'required|string|min:3|max:40',
		] );
		$category->update( [
			'name' => request( 'name' ),
			'category_id' => (request( 'categoryId' ) == 0 ? null : request( 'categoryId' )),
			'active' => (is_null( request( 'active' )) ? 0 : 1),
		] );
		return redirect( route( 'category.show', [ 'id' => $category->id ] ) );
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Category  $category
	 * @return \Illuminate\Http\Response
	 */
	public function destroy( Category $category ) {
		if ( auth()->user()->isAdmin === 1 ) {
			$category->delete();
			return redirect( route( 'category.index' ) );
		}
		return redirect( route( 'category.index' ) );
	}

	public function severalDelete( Request $request ) {
		foreach ( request('category') as $id ) {
			$category = Category::findOrFail($id);
			$category->delete();
		}
		return redirect( route( 'category.index' ) );
	}

}
