@php
$footerItem = [
[
"title" => "DC COMICS",
"link" => [
[
"name" => "Characters",
],
[
"name" => "Comics",
],
[
"name" => "Movies",
],
[
"name" => "TV",
],
[
"name" => "Games",
],
[
"name" => "Videos",
],
[
"name" => "News",
],
]
],
[
"title" => "DC",
"link" => [
[
"name" => "Terms Of Use",
],
[
"name" => "Privacy policy (New)",
],
[
"name" => "Ad Choices",
],
[
"name" => "Advertising",
],
[
"name" => "Jobs",
],
[
"name" => "Subscriptions",
],
[
"name" => "Talent Workshops",
],
[
"name" => "CPSC Certificates",
],
[
"name" => "Ratings",
],
[
"name" => "Shop Help",
],
[
"name" => "Contact Us",
],
],
],
[
"title" => "SITES",
"link" => [
[
"name" => "DC",
],
[
"name" => "MAD Magazine",
],
[
"name" => "DC Kids",
],
[
"name" => "DC Universe",
],
[
"name" => "DC Power visa",
],

],
],
[
"title" => "SHOP",
"link" => [
[
"name" => "Shop DC",
],
[
"name" => "Shop DC Collectibles",
],
]
],
]
@endphp
<style>
    .bg {
        background-image: url(/images/footer-bg.jpg);
    }

    .text {
        color: #949494;
    }
</style>
<footer class="bg p-5">
    <div class="container">
        <div class="row">
            @foreach ($footerItem as $singleItem)
            <div class="col-3">
                <h3 class="text-white">{{ $singleItem['title'] }}</h3>
                <ul class="p-0">
                    @foreach ($singleItem['link'] as $link)
                    <li><a href="#" class="text">{{ $link['name'] }}</a></li>
                    @endforeach
                </ul>
                <div class="img">
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
</footer>