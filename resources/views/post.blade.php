@extends('layouts.app')

@section('content')
    <div class="card mx-auto" style="width: 18rem;">
        <img src="https://placehold.jp/100x100.png" alt="img" class="bd-placeholder-img card-img-top">
    </div>

    <div class="card-body">
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>

    <div id="example-2" class="carousel slide mt-3" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://placehold.jp/110x110.png" alt="First slide">
                <img src="https://placehold.jp/110x110.png" alt="First slide">
                <img src="https://placehold.jp/110x110.png" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="https://placehold.jp/110x110.png" alt="Second slide">
                <img src="https://placehold.jp/110x110.png" alt="Second slide">
                <img src="https://placehold.jp/110x110.png" alt="Second slide">
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
    
@endsection
