@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row jumbotron m-5">
        <div class="col-8">
            <img src="{{ url("storage/{$post->image}")}}" alt="{{ $post->caption }}" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{ url("storage/{$post->user->profile->image}") }}" class="w-100 rounded-circle" alt="{{ $post->user->username }}" style="max-width:50px">
                </div>
                <div>
                    <h5 class="font-weight-bold">
                        <a href="{{ url("profile/{$post->user->id}")}}">
                            <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                    </h5>
                </div>
            </div>
            <hr>
            <div class="pt-3">
                <p>{{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection