<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profil);
    }
    /*un profil peut avoir plusieurs followers et un user peut suivre plusieurs profils
    création table pivot*/
}
