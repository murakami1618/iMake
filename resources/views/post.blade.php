@extends('layouts.app')

@section('content')
<style type="text/css">
a:link, a:visited, a:hover, a:active {
  color: black;
  text-decoration: none;
}
</style>
    <div class="card mx-auto my-4" style="width: 25rem;">
    <div class="card-header">                    
        <a class="stretched-link" href="{{ url('/user', $posts->user_name) }}">
            {{ $posts->user_name }}
        </a>
    </div>
        <img src="/storage/main_images/{{$posts->main_image}}.jpeg" alt="img" class="bd-placeholder-img card-img-top"height='260'>
        <div class="card-body text-left">

            <td>{{ $posts->text }}</td>
    </div>
    </div>  
    <div class="container text-center">
        <div id="example-2" class="carousel slide mt-2 mx-auto" data-ride="carousel">
            <div class="carousel-inner  mb-5">
                <div class="carousel-item active  containe　img-responsive　bg-secondary">
                    <img src="/storage/base/{{$posts->base}}.jpeg" alt="img" class=" mx-auto bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">

                    <img src="/storage/fande/{{$posts->fande}}.jpeg" alt="img" class="mx-3 bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">

                    <img src="/storage/eyeliner/{{$posts->eyeliner}}.jpeg" alt="img" class="bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">
                </div>
                <div class="carousel-item">
                <img src="/storage/shadow/{{$posts->shadow}}.jpeg" alt="img" class="mx-auto bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">

                <img src="/storage/eyeshadow/{{$posts->eyeshadow}}.jpeg" alt="img" class="mx-3 bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">

                <img src="/storage/etc/{{$posts->etc}}.jpeg" alt="img" class="bd-placeholder-img card-img-top" style="height: 110px;width: 110px;">
                </div>
            
                <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </div>
</div>

    
@endsection