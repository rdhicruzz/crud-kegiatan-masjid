<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KegiatanController;

Route::get('/', function () {
    return redirect('/kegiatan');
});

Route::resource('kegiatan', KegiatanController::class);
