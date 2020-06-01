@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profil/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h3>Modifier le profil</h3>
                </div>
                <div class="form-group row">
                    <label for="titre" class="col-md-4 col-form-label">{{ __('Changement de ?') }}</label>
                
                        <input id="titre" 
                        type="text" 
                        class="form-control @error('titre') is-invalid @enderror" 
                        name="titre" 
                        value="{{ old('titre') ?? $user->profil->titre }}" 
                        required autocomplete="titre" autofocus>
    
                        @error('titre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="presentation" class="col-md-4 col-form-label">{{ __('Présentez-vous') }}</label>
                
                        <input id="presentation" 
                        type="text" 
                        class="form-control @error('presentation') is-invalid @enderror" 
                        name="presentation" 
                        value="{{ old('presentation') ?? $user->profil->presentation }}" 
                        required autocomplete="presentation" autofocus>
    
                        @error('presentation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('L\'adresse URL de votre site') }}</label>
                
                        <input id="url" 
                        type="text" 
                        class="form-control @error('url') is-invalid @enderror" 
                        name="url" 
                        value="{{ old('url') ?? $user->profil->url }}" 
                        required autocomplete="url" autofocus>
    
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Image du profl') }}</label>
                
                        <input id="image" 
                        type="file" 
                        class="form-control-file @error('image') is-invalid @enderror" 
                        name="image" >
    
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="row pt-3">
                    <button class="btn btn-dark"> Enregistrer le profil</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection