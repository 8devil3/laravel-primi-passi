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



Route::get('/', function (){

   $links = [
      'links' => [
         [
            'text' => 'Home',
            'url' => '/'
         ],
         [
            'text' => 'About',
            'url' => '/about'
         ],
         [
            'text' => 'Contact',
            'url' => '/contact'
         ]
      ]
   ];

   $data = [
      'categories' => [
          [
              'id' => '1',
              'name' => 'books'
          ],
          [
              'id' => '2',
              'name' => 'movies'
          ],
          [
              'id' => '3',
              'name' => 'songs'
          ]
      ]
  ];

    return view('home', $data, $links);
})->name('home');


Route::get('/about', function (){
    return view('about');
})->name('about');


Route::get('/contact', function (){
    return view('contact');
})->name('contact');

