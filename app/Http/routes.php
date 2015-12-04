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
	$mail = Mail::send('emails.test', ['user' => 'null'], function ($m) {
            $m->from('info@repuestoslosgallegos.com.ve', 'Repuestos Los Gallegos, C.A.');

            $m->to('ramonlv93@gmail.com', 'ramon LEdezma')->subject('Your Reminder!');
    });
    return dd($mail);
});