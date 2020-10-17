<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherEval\StudentEvaluationController;
use App\Http\Controllers\TeacherEval\EvaluationTypeController;
use App\Http\Controllers\TeacherEval\PairEvaluationController;
use App\Http\Controllers\TeacherEval\SelfEvaluationController;
use App\Http\Controllers\TeacherEval\EvaluationController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('evaluation_types', App\Http\Controllers\TeacherEval\EvaluationTypeController::class);
Route::apiResource('questions', App\Http\Controllers\TeacherEval\QuestionController::class);
Route::get('answers', 'App\Http\Controllers\TeacherEval\QuestionController@indexAnswer'); 
Route::get('answers/{id}', 'App\Http\Controllers\TeacherEval\QuestionController@showAnswer'); 
Route::post('answers', 'App\Http\Controllers\TeacherEval\QuestionController@storeAnswer');
Route::put('answers/{id}', 'App\Http\Controllers\TeacherEval\QuestionController@updateAnswer');
Route::delete('answers/{id}', 'App\Http\Controllers\TeacherEval\QuestionController@destroyAnswer'); 
Route::apiResource('student_evaluations', StudentEvaluationController::class); 
Route::apiResource('pair_evaluations', PairEvaluationController::class);

Route::apiResource('self_evaluations', SelfEvaluationController::class);

Route::apiResource('evaluations', EvaluationController::class);






