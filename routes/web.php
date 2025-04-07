<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IMController;
use App\Http\Controllers\EventInfoController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\GiftController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuestDataController;

Route::get('/', function () {
    return view('undangan');
});

// Tes Route
// Route::get('/admin/edit/informasi-mempelai', function () {
//     return view('admin.edit.informasiMempelai');
// });

//rooute login
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login/dashboard', [LoginController::class, 'login']);

// route dashboard
Route::get('/admin', [DashboardController::class, 'index']);

//route data tamu pending
Route::get('/admin/data-tamu',[GuestDataController::class,'index']);

//route IM CRUD
Route::get('/admin/edit/informasi-mempelai/data',[IMController::class,'index']);
Route::get('/admin/edit/informasi-mempelai/create',[IMController::class,'create']);
Route::post('/admin/edit/informasi-mempelai/data',[IMController::class,'store']);

//route event info pending
Route::get('/admin/edit/informasi-acara/data',[EventInfoController::class,'index']);
Route::get('/admin/edit/informasi-acara/edit',[EventInfoController::class,'sedit']);
Route::get('/admin/edit/informasi-acara/create',[EventInfoController::class,'create']);
Route::post('/admin/edit/informasi-acara/data',[EventInfoController::class,'store']);

//route galeri pending
Route::get('/admin/edit/galeri/data',[GaleryController::class,'index']);
Route::get('/admin/edit/galeri/create',[GaleryController::class,'create']);

//route cover pending
Route::get('/admin/edit/cover/data',[CoverController::class,'index']);
Route::get('/admin/edit/cover/create',[CoverController::class,'create']);

//route cerita pending
Route::get('/admin/edit/cerita/data',[StoryController::class,'index']);
Route::get('/admin/edit/cerita/edit1',[StoryController::class,'sedit1']);
Route::get('/admin/edit/cerita/edit2',[StoryController::class,'sedit2']);
Route::get('/admin/edit/cerita/edit3',[StoryController::class,'sedit3']);
Route::get('/admin/edit/cerita/create',[StoryController::class,'create']);

//route hadiah pending
Route::get('/admin/edit/hadiah/data',[GiftController::class,'index']);
Route::get('/admin/edit/hadiah/edit',[GiftController::class,'sedit']);
Route::get('/admin/edit/hadiah/create',[GiftController::class,'create']);


