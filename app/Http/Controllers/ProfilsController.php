<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilsController extends Controller
{
    public function index(User $user)
    {
        //$user = User::findOrFail($user);
        return view('profils.index', compact('user'));
    }

    public function edit(User $user)
    {
        //par rapport au rajout ds policies update profil
        $this->authorize('update', $user->profil);

        return view('profils.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profil);

        $data = request()->validate([
            'titre' => 'required',
            'presentation' => 'required',
            'url' => 'url',
            'image' => ''
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profil', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000); //ici attention double " " pour public path
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->profil->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/profil/{$user->id}");

    }
}
