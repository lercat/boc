@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h3>Ajouter un Post</h3>
                </div>
                <div class="form-group row">
                    <label for="legende" class="col-md-4 col-form-label">{{ __('Légende du post') }}</label>
                
                        <input id="legende" 
                        type="text" 
                        class="form-control @error('legende') is-invalid @enderror" 
                        name="legende" 
                        value="{{ old('legende') }}" 
                        required autocomplete="legende" autofocus>
    
                        @error('legende')
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
                    <label for="description" class="col-md-4 col-form-label">{{ __('Description du post') }}</label>
                
                        <input id="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" 
                        value="{{ old('description') }}" 
                        required autocomplete="description" autofocus>
    
                        @error('description')
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
                    <label for="image" class="col-md-4 col-form-label">{{ __('Image du post') }}</label>
                
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
                    <button class="btn btn-dark"> Ajouter le post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection