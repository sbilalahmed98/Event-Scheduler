<?php
Route::get('/events', function(){ return App\Models\Event::all(); });