@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="../../assets/img/cheers.jpg" class="rounded-circle" alt="cheers">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h2>{{ $user->username }}</h2>
                <a href="/p/create">Ajouter un post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profil->titre }}</div>
            <div>{{ $user->profil->presentation }}</div>
            <div> <a href="#">{{ $user->profil->url }}</a></div>
          
        </div>
    </div>
    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <img src="/storage/{{ $post->image }}" class="w-100" alt="une bière">
            </div>
        @endforeach
    </div>
</div>
@endsection