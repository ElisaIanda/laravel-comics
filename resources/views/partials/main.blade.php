@php
$itemList = [
[
"name" => "DIGITAL COMICS",
"img" => "/images/buy-comics-digital-comics.png"
],
[
"name" => "DC MERCHANDISE",
"img" => "/images/buy-comics-merchandise.png"
],
[
"name" => "SUBSCRIPTION",
"img" => "/images/buy-comics-subscriptions.png"
],
[
"name" => "COMIC SHOP LOCATOR",
"img" => "/images/buy-comics-shop-locator.png"
],
[
"name" => "DC POWER VISA",
"img" => "/images/buy-dc-power-visa.svg"
],
];
@endphp

<main>
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

    <section class="bg-primary">
        <div class="container">

            <div class="row">
                @foreach ( $itemList as $singleItem )
                <div class="col d-flex align-items-center gap-3">
                    <div class="container-img">
                        <img src={{ $singleItem ["img"] }} class="card-img-top" alt="">
                    </div>
                    <div class="">
                        <p class="card-text">{{$singleItem["name"]}}</p>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>