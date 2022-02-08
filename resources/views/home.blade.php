@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/tuco.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pe-3"><strong>999</strong> posts</div>
                <div class="pe-3"><strong>999</strong> followers</div>
                <div class="pe-3"><strong>999</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/bmw_e39.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/bmw_e39.jpg" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/bmw_e39.jpg" class="w-100">
        </div>
    </div>
</div>
@endsection