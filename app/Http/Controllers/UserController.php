<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show all users
    public function index() {
        return view('users.index', [
            'user' => User::all()
        ]);
    }

    // Show single view
    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
