<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Feedback\FormQuestionController;
use App\Http\Controllers\Feedback\FormResponseController;
use App\Http\Controllers\Feedback\GeneralController;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Feedback Module Web Routes
|--------------------------------------------------------------------------
|
*/

Route::redirect('/', '/feedback');
Route::middleware(['web'])->prefix('feedback')->group(function () {
    Route::get('/', [GeneralController::class, 'index'])->name('feedback.form');
    Route::post('/', [GeneralController::class, 'postForm'])->name('feedback.send');
});
/* 
|-----------------------------------
| Admin Management of Feedback Module
|-----------------------------------
 */
Route::middleware(['web'])->prefix('feedback/qq')->group(function () {
    Route::get('request-feedback', [GeneralController::class, 'requestFeedback'])->name('feedback.request');
    Route::post('request-feedback', [GeneralController::class, 'sendRequest'])->name('feedback.sendrequest');
    Route::resources([
        'questions' => FormQuestionController::class,
        'responses' => FormResponseController::class,
    ]);
});
    