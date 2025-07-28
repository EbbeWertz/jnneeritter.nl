<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MailTest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/lid-worden', function () {
    return view('lid-worden');
})->name('lid-worden');

Route::get('/beheer', function () {
    return view('admin');
});
Route::get('/download/opgaveformulier.pdf', function () {
    $path = storage_path('app/public/.gitignore');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path, '.gitignore');
});

Route::post('/mail', function (Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    Mail::to('ebbe.wertz8@gmail.com')->send(new MailTest('ebbe.wertz8@gmail.com'));


    // Mail::to($request->email)->send(new MailTest($request->email));

    return 'email verzonden';
});
