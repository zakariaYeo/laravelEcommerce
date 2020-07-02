<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
/* Products route*/
Route::get('boutique','ProductsController@index')->name('products.index');
Route::get('boutique/{slug}','ProductsController@show')->name('products.show');

/* Carts route */
Route::get('panier','CartsController@index')->name('cart.index');
Route::post('panier/ajouter','CartsController@store')->name('cart.store');
Route::delete('panier/{rowId}','CartsController@destroy')->name('cart.destroy');

/* Checkout route */
Route::get('paiement','CheckoutsController@index')->name('checkout.index');
Route::post('paiement','CheckoutsController@store')->name('checkout.store');
Route::get('thanks', function(){
    return view('checkout.thanks');
});
