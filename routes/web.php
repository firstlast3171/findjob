<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

Route::get('/',[ListingController::class,"index"]);

Route::get("/listings/create",[ListingController::class,"create"])->middleware("auth","user");

Route::post("/listings",[ListingController::class,"store"])->middleware("auth","user");

Route::get("/listings/edit/{listing}",[ListingController::class,"edit"])->middleware("auth","user");

Route::put("/listings/edit/{listing}",[ListingController::class,"update"])->middleware("auth","user");

Route::delete("/listings/delete/{listing}",[ListingController::class,"delete"])->middleware("auth","user");

Route::get("/listings/{listing}",[ListingController::class,"viewPost"])->where("id","[0-9]+");

Route::get("/manage/{user}",[ListingController::class,"manage"])->middleware("auth","user");

// auth
Route::get("/register",[UserController::class,"create"]);
Route::post("/register",[UserController::class,"register"]);
Route::post("/logout",[UserController::class,"logout"])->middleware("auth");

Route::get("/login",[UserController::class,"login"])->name("login");
Route::post("/login",[UserController::class,"loginnow"]);

Route::get("/admin",[AdminController::class,"admin"])->middleware("auth","postman","user");
Route::get("/user/edit/{user}",[AdminController::class,"editpage"]);
Route::put("/user/edit/{user}",[AdminController::class,"changed"]);
Route::delete("/user/delete/{user}",[AdminController::class,"delete"]);




