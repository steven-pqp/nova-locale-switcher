<?php

use Illuminate\Support\Facades\Route;
use TramuntanaStudio\NovaLocaleSwitcher\Http\Controllers\GetLocalesController;
use TramuntanaStudio\NovaLocaleSwitcher\Http\Controllers\SwitchLocaleController;

Route::get('/locales', GetLocalesController::class);

Route::post('/switch-locale', SwitchLocaleController::class);
