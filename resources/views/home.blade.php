@extends('layouts.app')

@section('content')
<style type="text/css">
a:link, a:visited, a:hover, a:active {
  color: black;
  text-decoration: none;
}
</style>
<div class="container">
    @foreach($posts as $posts)
        <div class="row justify-content-center">
            <div class="card mx-auto my-3" style="width: 18rem;">
                <div class="card-header">
                    <a href="{{ url('/user', $posts->user_name) }}">{{ $posts->user_name }}</a>
                </div>
                @if ($posts->main_image)
                    <a href="{{ url('/post', $posts->id) }}">

                    
                        <img src="/storage/main_images/{{$posts->main_image}}.jpeg" alt="img" class="bd-placeholder-img card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{$posts->text}}</p>
                        </div>
                        </div>
                    </a>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
