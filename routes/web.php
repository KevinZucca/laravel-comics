<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $headerLinks = [
        "/characters" => "characters",
        "/comics" => "movies",
        "/tv" => "tv",
        "/games" => "games",
        "/collectibles" => "collectibles",
        "/videos" => "videos",
        "/fans" => "fans",
        "/news" => "news",
        "shop" => "shop"
    ];

    $cards = config('comics');


    $shopLinks = [
        "digital comics" => "resources/img/images/buy-comics-digital-comics.png",
        "dc merchandise" => "resources/img/images/buy-comics-merchandise.png",
        "subscription" => "resources/img/images/buy-comics-subscriptions.png",
        "comic shop locator" => "resources/img/images/buy-comics-shop-locator.png",
        "dc power visa" => "resources/img/images/buy-dc-power-visa.svg"
    ];

    $footerLinks = [
        "dc comics" => ["Characters", "Comics", "Movies", "TV", "Games", "Videos", "News"],
        "shop" => ["Shop DC", "Shop DC Colletctibles"],
        "dc" => ["Terms Of Use", "Privacy Policy (New)", "Ad Choices", "Advertising", "Jobs", "Subscriptions", "Talent Workshops", "CPSC Certificates", "Ratings", "Shop Help", "Contact Us"],
        "sites" => ["DC", "MAD Magazine", "DC Kids", "DC Universe", "DC Power Visa"]
    ];

    return view('home', compact('headerLinks', 'cards', 'shopLinks', 'footerLinks'));
});

Route::get('/comics', function () {
    return view('comics');
});

Route::get('/movies', function () {
    return view('movies');
});

Route::get('/tv', function () {
    return view('tv');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/collectibles', function () {
    return view('collectibles');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/fans', function () {
    return view('fans');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/shop', function () {
    return view('shop');
});
