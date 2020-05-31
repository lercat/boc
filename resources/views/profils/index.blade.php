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
                <a href="#">Ajouter un post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>

            <div class="pt-4 font-weight-bold">{{ $user->profil->titre }}</div>
            <div>{{ $user->profil->presentation }}</div>
            <div> <a href="#">{{ $user->profil->url }}</a></div>
          
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="../../assets/img/barbar.png" class="w-100" alt="bière barbar">
        </div>
        <div class="col-4">
            <img src="../../assets/img/bernardus.png" class="w-100" alt="bière bernardus">
        </div>
        <div class="col-4">
            <img src="../../assets/img/erdinger.png" class="w-100" alt="bière erdinger">
        </div>
    </div>
</div>
@endsection