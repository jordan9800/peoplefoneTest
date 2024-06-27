<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * Get list of all users
     */
    public function index()
    {
        $users = User::all();

        return view('admin.user', ['users' => $users]);
    }
}
