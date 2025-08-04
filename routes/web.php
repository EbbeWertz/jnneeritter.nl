<?php

use App\Http\Middleware\NoIndex;
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

Route::prefix('beheer')->as('admin.')->middleware([NoIndex::class])->group(function () {
    Route::get('/', function () {
        return view('admin.home'); })->name('home');
    Route::get('/nieuws', function () {
        return view('admin.nieuws'); })->name('nieuws');
    Route::get('/activiteiten', function () {
        return view('admin.activiteiten'); })->name('activiteiten');
    Route::get('/documenten', function () {
        return view('admin.documenten'); })->name('documenten');
    Route::get('/info', function () {
        return view('admin.info'); })->name('info');
    Route::get('/accounts', function () {
        return view('admin.accounts'); })->name('accounts');
});

Route::get('/download/opgaveformulier.pdf', function () {
    $path = storage_path('app/public/Opgavenformulier.pdf');

    if (!file_exists($path)) {
        abort(404);
    }

    return response()->download($path, 'Opgavenformulier.pdf');
})->name('download-opgaveformulier');

Route::post('/mail', function (Illuminate\Http\Request $request) {
    $request->validate([
        'email' => 'required|email',
    ]);

    Mail::to('ebbe.wertz8@gmail.com')->send(new MailTest('ebbe.wertz8@gmail.com'));


    // Mail::to($request->email)->send(new MailTest($request->email));

    return 'email verzonden';
});
