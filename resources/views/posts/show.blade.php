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
                    <div class="pe-3">
                        <img src="/storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width: 50px">
                    </div>
                    <div>
                            <strong>
                                <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                                     {{ $post->user->username }}
                                 </a>
                             </strong>
                             <a href="#" class="ps-3">Follow</a>
                    </div>
                </div>
                <hr>
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
</div>
@endsection