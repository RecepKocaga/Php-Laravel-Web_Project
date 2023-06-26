<?php

use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| FRONT ROUTE
|--------------------------------------------------------------------------
*/
Route::get('/', 'App\Http\Controllers\Front\HomepageController@index')->name('homepage');
Route::get('/hizmetler', 'App\Http\Controllers\Front\HomepageController@service')->name('service');
Route::get('/hizmetler/{slug}', 'App\Http\Controllers\Front\HomepageController@servicesingle')->name('service.single');
Route::get('/hakkımızda', 'App\Http\Controllers\Front\HomepageController@about')->name('about');
Route::get('/fiyatlar', 'App\Http\Controllers\Front\HomepageController@price')->name('price');
Route::get('/fiyatlar/{slug}', 'App\Http\Controllers\Front\HomepageController@pricesingle')->name('price.single');
Route::get('/blog', 'App\Http\Controllers\Front\HomepageController@blog')->name('blog');
Route::get('/blog/{slug}', 'App\Http\Controllers\Front\HomepageController@blogsingle')->name('blog.single');
Route::get('sayfa', 'App\Http\Controllers\Front\HomepageController@blog');
Route::get('/kategori/{category}', 'App\Http\Controllers\Front\HomepageController@category')->name('blog.category');
Route::get('/search', 'App\Http\Controllers\Front\HomepageController@search')->name('search');
Route::get('/iletişim', 'App\Http\Controllers\Front\HomepageController@contact')->name('contact');
Route::post('/iletişim', 'App\Http\Controllers\Front\HomepageController@contactpost')->name('post.contact');
Route::post('/', 'App\Http\Controllers\Front\HomepageController@sendpost')->name('post.send');