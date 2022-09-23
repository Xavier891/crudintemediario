<?php

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route Hooks - Do not delete//
	Route::view('solicitud', 'livewire.solicitud.index')->middleware('auth');
	Route::view('estxsol', 'livewire.estxsol.index')->middleware('auth');
	Route::view('deptos', 'livewire.deptos.index')->middleware('auth');
	
	Route::view('solicituds', 'livewire.solicituds.index')->middleware('auth');
	
	Route::view('empresas', 'livewire.empresas.index')->middleware('auth');
	Route::view('pacientes', 'livewire.pacientes.index')->middleware('auth');
	Route::view('estudios', 'livewire.estudios.index')->middleware('auth');
	Route::view('doctores', 'livewire.doctores.index')->middleware('auth');