<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticControllers;
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

Route::get("/", [StaticControllers::class, "index"]);
Route::get("about", [StaticControllers::class, "about"]);

// Route::get('/first/{name_value?}/{age_value?}', function($name_value = null, $age_value = null){

//     return view("first", [
//         "name" => $name_value,
//         "age" => $age_value
//     ]);

// });
