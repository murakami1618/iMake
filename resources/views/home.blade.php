@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $posts)
        <div class="row justify-content-center">
            <div class="card mx-auto my-3" style="width: 18rem;">
                <div class="card-header">{{ $posts->user_name }}</div>
                    <a href="http://localhost:8000">
                        <img src="https://placehold.jp/150x150.png" alt="img" class="bd-placeholder-img card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{$posts->text}}</p>
                        </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
