@php
$menuList = [
[
"name" => "CHARACTERS",
],
[
"name" => "COMICS",
],
[
"name" => "MOVIES",
],
[
"name" => "TV",
],
[
"name" => "GAMES",
],
[
"name" => "COLLECTIBLES",
],
[
"name" => "VIDEOS",
],
[
"name" => "FANS",
],
[
"name" => "NEWS",
],
[
"name" => "SHOP",
],
];
@endphp

<style>
    ul {
        list-style: none;
    }

    li {
        display: flex;
        gap: 1rem;
    }

    a {
        text-decoration: none;
        color: #656661;
    }

    .jumbo {
        overflow: hidden;
        height: 400px;
        max-width: 100%;
    }
</style>
<header>
    <div class="container">
        <div class="d-flex align-items-center">

            <div class="logo">
                <img src="/images/dc-logo.png" alt="">
            </div>

            <div class="list-menu">
                <ul class="nav">
                    <li class="nav-item">
                        @foreach ( $menuList as $singleMenu )
                        <a href="#" class="nav-link ">{{$singleMenu["name"]}}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="jumbo">
        <img src="/images/jumbotron.jpg" alt="">
    </div>
</header>