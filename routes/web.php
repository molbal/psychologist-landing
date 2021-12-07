<?php

    use App\Http\Controllers\AboutController;
    use App\Http\Controllers\ContactController;
    use App\Http\Controllers\LandingController;
    use App\Http\Controllers\ProgramsController;
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

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::get('/magamrol/', [AboutController::class, 'index'])->name('about.index');
Route::get('/idopontfoglalas/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/szolgaltatasok/', [ProgramsController::class, 'index'])->name('programs.index');
Route::get('/szolgaltatas/{id}/{name}', [ProgramsController::class, 'get'])->name('programs.get');
