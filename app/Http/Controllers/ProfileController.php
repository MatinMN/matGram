<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class ProfileController extends Controller
{
     /**
     * Show a profile.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(string $user)
    {
        $user = User::findOrFail($user);

        return view('profile.index',[
            'user' => $user,
        ]);
    }
}
