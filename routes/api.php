<?php

use App\Http\Controllers\authcontroller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/register', [authcontroller::class, 'register']);
Route::get('/me',[Authcontroller::class, 'me']);
Route::post('/login',[Authcontroller::class, 'login']);

Route::group (['middleware' => []
],function () {
    Route::get('/me',[Authcontroller::class, 'me']);
});

