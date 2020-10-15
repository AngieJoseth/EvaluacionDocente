<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherEval\StudentEvaluationController;

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
Route::apiResource('student_evaluations', StudentEvaluationController::class); 
Route::apiResource('peer_evaluations', PeerEvaluationController::class);
Route::apiResource('self_evaluations', SelfEvaluationController::class);





