<?php

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('welcome');
});
