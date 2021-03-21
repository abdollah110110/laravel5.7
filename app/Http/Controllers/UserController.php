<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	public function username() {
		$names = User::pluck( 'name' );
		return view( 'users', compact( 'names', 'users' ) );
	}

	public function show( $name ) {
		$user = User::where( 'name', $name )->first();
		return view( 'show', compact( 'user' ) );
	}

}
