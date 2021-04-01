<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	public function index() {
		$users = User::all();
		return view( 'users.index', compact( 'users' ) );
	}

	public function show( User $user ) {
		return view( 'users.show', compact( 'user' ) );
	}

	public function edit( User $user ) {
		return view( 'users.edit', compact( 'user' ) );
	}

	public function update( User $user ) {
		$this->validate( request(), [
			'name' => 'required|string|max:255',
			'email' => 'required|string|email|max:255|unique:users',
		] );

		$user->update( [
			'name' => request( 'name' ),
			'email' => request( 'email' ),
			'isAdmin' => (request( 'isAdmin' ) === 1 ? 1 : 0),
			'active' => (request( 'active' ) === 1 ? 1 : 0),
		] );

		return redirect( route( 'user.show', [ 'id' => $user->id ] ) );
	}

}
