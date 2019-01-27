<?php use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

//Route::view('open', 'shop.index');
Route::get('open', 'HomePageController@index')->name('home.index');
    // @get products and
    // @categories(sidebar)
    // @breacums
//Route::view('products', 'shop.products');

    // @get product and button add to cart
    // @you might also like..
    // @breacums
//Route::view('product', 'shop.product');

    // @get form checkout
    // @sidebar your orders
//Route::view('checkout', 'shop.checkout');


//Route::view('cart', 'shop.cart');
//Route::view('thanks', 'shop.thanks');