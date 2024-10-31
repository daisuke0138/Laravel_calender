<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;

Route::get('/', function () { return view('welcome');});
Route::get('/calendar', function () {return view('calendar');});

// イベント登録処理
Route::post('/schedule-add', [ScheduleController::class, 'scheduleAdd'])->name('schedule-add');

// イベント取得処理
Route::post('/schedule-get', [ScheduleController::class, 'scheduleGet'])->name('schedule-get');