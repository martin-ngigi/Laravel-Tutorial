<?php

use App\Http\Controllers\MyController;
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
    return view('welcome');
});

Route::get('/my-view', function(){
    return view('my_view');
});

Route::get('/my-view-2', [MyController::class, 'myView2Method']);

/**
 * "/data-index" of the url... i.e. http://127.0.0.1:8000/data-index
 * MyController is Class defined app/Http/Controllers
 * "'indexView" is a method defined in MyController
 */
Route::get('/data-index', [MyController::class, 'indexView']);


