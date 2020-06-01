<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construt()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $data = request()->validate([
            'legende' => 'required',
            'description' => '', //champ qui n'est pas obligatoirement rempli
            'image' => ['required', 'image'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');

        auth()->user()->posts()->create([
            'legende' => $data['legende'],
            'description' => $data['description'],
            'image' => $imagePath
        ]);

        return redirect('/profil' . auth()->user()->id);
    }
}
