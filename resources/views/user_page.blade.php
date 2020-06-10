@extends('layouts.app')

@section('content') 
<style type="text/css">
a:link, a:visited, a:hover, a:active {
  color: black;
  text-decoration: none;
}
</style>
<nav class="navbar navbar-expand-md justify-content-center navbar-light bg-white shadow-sm">

        <img class="img-responsive mt-0 mw-100" src="https://placehold.jp/100x100.png" alt="img">
{{$name}}
    </nav>



    <div class="container">
        @foreach($posts as $posts)
            <div class="row justify-content-center my-1">
                <div class="card mx-auto my-0" style="width: 18rem;">
                    <a href="{{ url('/post', $posts->id) }}">
                        <img src="https://placehold.jp/150x150.png" alt="img" class="bd-placeholder-img card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{$posts->text}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
