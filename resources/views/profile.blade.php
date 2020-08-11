@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img class="rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRAFrQ8xUDyhaG8mFZzOr8FJg3I-lcZPYa4VQ&usqp=CAU" />
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{$user->username}}</h1>
                <a href="">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>24</strong> posts</div>
                <div class="pr-5"><strong>54</strong> followers</div>
                <div class="pr-5"><strong>68</strong> following</div>
            </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row">
        <div class="col-4"><img src="https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://images.pexels.com/photos/241316/pexels-photo-241316.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="" class="w-100"></div>
        <div class="col-4"><img src="https://cdn.autoportal.com/img/new-cars-gallery/renault/kwid/colors/403a91ded24bd7ca07213b427ba1b0a6.jpg" alt="" class="w-100"></div>
    </div>
</div>
@endsection
