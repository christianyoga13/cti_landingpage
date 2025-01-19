<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrialFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/trial-form', [TrialFormController::class, 'store'])->name('trial-form.store');