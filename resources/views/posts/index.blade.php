@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)

    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{ $post->user->id }}">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                <p>
                    <span>
                        <strong class="">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                {{ $post->user->username }}
                            </a>
                        </strong>
                    </span>{{ $post->caption }}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection