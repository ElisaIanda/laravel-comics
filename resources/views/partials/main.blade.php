<style>
    .container {
        display: flex;
        align-items: center;
    }

</style>
<main>
    <div class="container pt-5 ">

        <div class="">
            @foreach ( $comics as $singleComic )
            <div class="col-2">
                <div class="card">
                    <img src= {{ $singleComic ["thumb"] }} class="card-img-top" alt="">
                    <div class="card-body">
                        <p class="card-text">{{strtoupper($singleComic["series"])}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</main> 