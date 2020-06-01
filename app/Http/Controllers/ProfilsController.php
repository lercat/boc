<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilsController extends Controller
{
    public function index(User $user)
    {
        //$user = User::findOrFail($user);
        return view('profils.index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('profils.edit', compact('user'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'titre' => 'required',
            'presentation' => 'required',
            'url' => 'url',
            'image' => ''
        ]);

        auth()->user->profil->update($data);

        return redirect("/profil/{$user->id}");

    }
}
