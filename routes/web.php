<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    $data = [
        'nama' => 'Moudy Emellin',
        'judul' => 'Tugas Rutin 9 - Laravel Setup',
        'fitur' => [
            'Laravel Routing',
            'Blade View',
            'Controller',
            'Model dan Migration',
        ],
    ];

    return view('home', $data);
})->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/hello/{nama}', function ($nama) {
    return view('hello', ['nama' => $nama]);
})->name('hello');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');