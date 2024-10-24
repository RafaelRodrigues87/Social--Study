<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/matematica', function () {
    return view('matematica');
});

Route::get('/portugues', function () {
    return view('portugues');
});

Route::get('/historia', function () {
    return view('historia');
});
Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/biologia', function () {
    return view('biologia');
});
Route::get('/filosofia', function () {
    return view('filosofia');
});

Route::get('/fisica', function () {
    return view('fisica');
});

Route::get('/geografia', function () {
    return view('geografia');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/provas', function () {
    return view('provas');
});

Route::get('/quimica', function () {
    return view('quimica');
});

Route::get('/sociologia', function () {
    return view('sociologia');
});