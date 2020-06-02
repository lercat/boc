@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profil->profilImage() }}" class="rounded-circle w-100" alt="image du profil">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h3">{{ $user->username }}</div>
                    <img src="../assets/img/coeur.png" class="pl-3"  alt="coeur">
                    <follow-button user-id="{{ $user->id }}"> </follow-button>
                </div>

                @can('update', $user->profil)
                    <a href="/p/create">Ajouter un post</a>
                @endcan
            </div>
            <!-- masque le lien de modif profil si pas bon user->profil-->
            @can('update', $user->profil)
                <a href="/profil/{{ $user->id }}/edit">Modifier le profil</a>
            @endcan
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
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="une bière">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection