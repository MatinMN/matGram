@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ url('posts')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row pt-2 pb-2">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post Caption') }}</label>
                    <input id="caption"
                           type="text"
                           class="form-control 
                           @error('caption') is-invalid @enderror" 
                           name="caption" 
                           value="{{ old('caption') }}" 
                            autocomplete="caption" autofocus>
    
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>
                    <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror" >
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row pt-5">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
