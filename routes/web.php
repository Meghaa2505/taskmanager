<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/login",[Controller::class,"login"])->name("login");
Route::post("/login",[Controller::class,"getlogin"])->name("getlogin");

Route::get("/users/all",[UserController::class,"all"])->name("users.all");
Route::get("/users/add",[UserController::class,"add"])->name("users.add");
Route::post("/users/add",[UserController::class,"save"])->name("users.save");

Route::get("/tasks/all",[TaskController::class,"all"])->name("tasks.all");
Route::get("/tasks/add",[TaskController::class,"add"])->name("tasks.add");
Route::post("/tasks/add",[TaskController::class,"save"])->name("tasks.save");
