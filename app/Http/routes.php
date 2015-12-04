<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('portada');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/sendmail', function () {
	Mail::send('emails.test', ['user' => 'null'], function ($m) {
            $m->from('ramonlv93@gmail.com', 'Ramon');

            $m->to('ramoni_93_@hotmail.com', 'ramon LEdezma')->subject('Your Reminder!');
    });
    return view('portada');
});