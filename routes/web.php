<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function(){
    $title = "homepage";
   
    return view('web.homepage',['title'=>$title]);
});
    Route::get('homepage', function(){
    $title = "Homepage";
    return view('web.homepage',['title'=>$title]);
});
   Route::get('product', function(){
    $title = "Products";
    return view('web.product',['title'=>$title]);
});
   Route::get('product/{slug}', function($slug){
    $title = "Single Product";
    return view('web.single_product',['title'=>$title,'slug'=>$slug]);
});
   Route::get('categories', function(){
    $title = "Categories";
    return view('web.categories',['title'=>$title]);
});
   Route::get('category/{slug}', function($slug){
    $title = "Single Category";
    return view('web.single_category',['title'=>$title,'slug'=>$slug]);
});

    Route::get('card', function(){
    $title = "card";
    return view('web.card',['title'=>$title]);
});
   Route::get('cart', function(){
    $title = "Cart";
    return view('web.cart',['title'=>$title]);
});
   Route::get('checkout', function(){
    $title = "Checkout";
    return view('web.checkout',['title'=>$title]);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
