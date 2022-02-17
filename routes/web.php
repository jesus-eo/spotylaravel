<?php

use App\Http\Controllers\AlbumController;
use App\Http\Livewire\Contador;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('albumes', AlbumController::class)
    ->parameters(['albumes' => 'album']);
    //Cuando visualizamos las rutas salga asi albumes/{album} con php artisan route:list


/* Comprobando peticiones con fetch */
Route::get('/alpine', function () {
    return view('alpine');
});

Route::post('/contact', function ($json) {
    dd($json);
});

//Esto lleva al componente contador que esta en App/http/livewire/contador
Route::get('/contador', Contador::class);

require __DIR__.'/auth.php';
