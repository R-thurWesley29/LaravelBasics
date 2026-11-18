<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('home');
});

Route::get('/tentang', function () {
    return ('this a page about us');
});

// Route::get('/halo/{nama}', function () {
//     $nama = "Veeronica";
//     return ('Halo, $nama');
// });

// Route::get('/salam/{nama?}', function ($nama = 'teman') {
//     return ('Selamat datang,  $nama');
// });

// Route::get('/artikel/{id}', function ($id) {
//     return ('Artikel ID: $id');
// })->whereNumber('id');

Route::get('/kontak', function () {
    return ('Halaman Kontak');
})->name('kontak');

// Route::get('/produk/{slug}', function ($slug) {
//     return ("Produk:$slug");
// })->name('produk.detail');

// Route ::prefix('admin')->group(function (){
//  Route::get('/dashboard', function () {
//     return ("Admin Dashboard");
// })->name('admin.dashboard');   
// });

Route ::get('/',[PageController::class,'home']);

Route::get('/tentang', [PageController::class,'tentang']);

Route ::get('/halo/{name}',[PageController::class,'halo']);