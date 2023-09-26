@extends("layouts.public")

@section("content")
<div class="container pt-5 ">

        <div class="flex-wrap row">

            @foreach ( $comics as $singleComic )
            <div class="col-2 pb-3">
                <div class="card h-100">
                    <img src={{ $singleComic ["thumb"] }} class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{strtoupper($singleComic["series"])}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex justify-content-center pb-4">
            <button class="btn">
                <a href="#" class="text-white">LOAD MORE</a>
            </button>
        </div>
    </div>

    @include("partials.main")

@endsection
