@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pr-3">
                        <img src="{{ $post->user->profil->profilImage() }}" class="rounded-circle w-100" style="max-width: 40px" alt="">
                    </div>
                    <div>
                        <div class="font-weight-bold">
                            <a href="/profil/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}
                                </span>
                            </a>
                            <img src="../assets/img/coeur.png" class="pl-3"  alt="coeur">
                            <a href="#" class="pl-3 text-dark">Follow</a>
                        </div>
                    </div>
                </div>
                <hr>
                <p>
                    <span class="font-weight-bold pr-3">
                        <a href="/profil/{{ $post->user->id }}">
                            <span class="text-dark">{{ $post->user->username }}
                            </span>
                        </a>
                    </span>
                    {{ $post->legende }}
                </p>
                <p class="pt-3">{{ $post->description }}</p>
            </div>
        </div>
    </div>
</div>
@endsection