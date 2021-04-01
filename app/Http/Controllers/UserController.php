<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	public function index() {
		$users = User::all();
		return view('users.index', compact('users'));
	}

	public function edit(User $user) {
		return view('users.edit', compact('user'));
	}

	public function update(User $user) {
		return $user;
		return view('users.edit', compact('user'));
	}

}
