@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle w-100" src="{{ url("/storage/{$user->profile->image}") }}" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                @can('update', $user->profile)
                    <a href="{{ route('posts.create')}}">Add New Post</a>
                    <a href="{{ url("profile/{$user->id}/edit") }}">Edit profile</a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>54</strong> followers</div>
                <div class="pr-5"><strong>68</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        @foreach ($user->posts as $post)
            <div class="col-4 mb-5">
                <a href="{{ url("posts/{$post->id}") }}">
                    <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->caption }}" class="w-100">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
