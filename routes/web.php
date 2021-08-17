<?php


use App\Http\Controllers\ProjectController;
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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/projects', [ProjectController::class, 'index'] );

Route::get('/project/{id}', [ProjectController::class, 'show'] );

Route::get('/create-project', [ProjectController::class, 'create'] );
Route::post('/create-project', [ProjectController::class, 'store'] );

Route::get('/project/{id}/edit', [ProjectController::class, 'edit'] );
Route::put('/project/{id}/edit', [ProjectController::class, 'update'] );




Route::post('/project/{id}/delete', [ProjectController::class, 'destroy'] );



