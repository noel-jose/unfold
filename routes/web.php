<?php

use App\Http\Controllers\QuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Question;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('question.index');

Route::get('/question/{question}',[QuestionController::class,'show'])->name('question.show');

Route::post('/question/{question}',[QuestionController::class,'store'])->name('question.submit');

Route::get('/sample',[QuestionController::class,'index']);
