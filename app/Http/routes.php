<?php

Route::get('/', function () {
  return view('welcome');
});

Route::resource('almacen/categoria','CategoriaController');

Route::get('home', function () {
  return view('inicio');
});
