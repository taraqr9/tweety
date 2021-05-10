<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        //Follow the given user
        auth()->user()->toggleFollow($user);

        return back();
    }
}
