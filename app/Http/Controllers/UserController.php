<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	public function index() {
		$users = User::latest()->paginate(20);
		return view('users.users', compact('users'));
	}

}
