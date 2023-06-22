<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Post;


class UserController extends Controller
{
    public function get() {
        $users = User::with('roles')->get();
        return view('users.index', compact('users'));
    }

    public function userPosts(User $user) {
        $posts = $user->posts;
        return view('users.posts', compact('user', 'posts'));
    }
}
