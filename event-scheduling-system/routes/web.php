<?php
use Illuminate\Support\Facades\Route;
Route::get('/events',[EventController::class,'index']);
Route::post('/book/{event}',[BookingController::class,'book']);