<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', ['titolo' => "WebMingle", "home" => "Esplora il Mondo del Web Development"]);
})->name("home");

Route::get('/articoli', function () {
    $articoli = [];
    $articoli = [
        ['titolo' => 'Microsoft Teams ora supporta le riunioni in 3D e VR', 'categoria' => 'Microsoft', 'descrizione' => 'Microsoft ha annunciato oggi il lancio delle sue riunioni immersive in 3D all’interno di Microsoft Teams.'],
        ['titolo' => 'Facebook e Instagram: limitazioni per i messaggi', 'categoria' => 'Social', 'descrizione' => 'Meta ha annunciato nuove limitazioni per i messaggi privati scambiati dai minorenni su Facebook e Instagram.'],
        ['titolo' => 'Come vedere Djokovic-Sinner in streaming dall\'estero', 'categoria' => 'Entertainment', 'descrizione' => 'jokovic-Sinner in campo anche agli Australian Open: la sfida si ripete nel primo torneo del Grande Slam per questo 2024, in occasione della semifinale. Puoi vedere la partita in streaming su DAZN.']
    ];
    return view('articoli', ['titolo' => "WebMingle", "articoli" => $articoli]);
})->name("articoli");

Route::get('/chisono', function () {
    return view('chisono', ['titolo' => "WebMingle"]);
})->name("contatti");

//Rotta parametrica

Route::get("/articolo/{id}", function ($id) {
    $articoli = [
        ['titolo' => 'Microsoft Teams ora supporta le riunioni in 3D e VR', 'categoria' => 'Microsoft', 'descrizione' => 'Microsoft ha annunciato oggi il lancio delle sue riunioni immersive in 3D all’interno di Microsoft Teams.'],
        ['titolo' => 'Facebook e Instagram: limitazioni per i messaggi', 'categoria' => 'Social', 'descrizione' => 'Meta ha annunciato nuove limitazioni per i messaggi privati scambiati dai minorenni su Facebook e Instagram.'],
        ['titolo' => 'Come vedere Djokovic-Sinner in streaming dall\'estero', 'categoria' => 'Entertainment', 'descrizione' => 'jokovic-Sinner in campo anche agli Australian Open: la sfida si ripete nel primo torneo del Grande Slam per questo 2024, in occasione della semifinale. Puoi vedere la partita in streaming su DAZN.']
    ];

    return view("articolo", ['articolo' => (object) $articoli[$id], 'titolo' => "WebMingle"]);
})->name('articoli.dettaglio');