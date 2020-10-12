<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::get('evaluations','TeacherEval\PeerEvaluation\PeerEvaluationController@index');
//Route::post('evaluations','TeacherEval\PeerEvaluation\PeerEvaluationController@store');
//Route::put('evaluations','TeacherEval\PeerEvaluation\PeerEvaluationController@update');
//Route::delete('evaluations','TeacherEval\PeerEvaluation\PeerEvaluationController@destroy');

Route::apiResource('evaluations','TeacherEval\PeerEvaluation\PeerEvaluationController');