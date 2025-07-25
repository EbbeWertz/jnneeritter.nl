<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailTest;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('home');
});

Route::get('/beheer', function () {
    return view('admin');
});


Route::post('/mail', function (Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    Mail::to('ebbe.wertz8@gmail.com')->send(new MailTest('ebbe.wertz8@gmail.com'));


    // Mail::to($request->email)->send(new MailTest($request->email));

    return 'email verzonden';
});