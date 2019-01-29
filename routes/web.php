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
Route::get('shopping', 'ShopController@index')->name('shopping');
    // @get product and button add to cart
    // @you might also like..
    // @breacums
Route::get('shopping/{product}', 'ShopController@show')->name('shopping.show');

Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('cart', 'CartController@store')->name('cart.store');
Route::get('empty', function (){
   Cart::destroy();
});

    // @get form checkout
    // @sidebar your orders
//Route::view('checkout', 'shop.checkout');


//Route::view('cart', 'shop.cart');
//Route::view('thanks', 'shop.thanks');