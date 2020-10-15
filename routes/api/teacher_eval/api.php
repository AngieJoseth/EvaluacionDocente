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
<<<<<<< HEAD

Route::apiResource('evaluation_types', EvaluationTypeController::class);
Route::apiResource('student_evaluations', StudentEvaluationController::class); 
Route::apiResource('peer_evaluations', PeerEvaluationController::class);
Route::apiResource('self_evaluations', SelfEvaluationController::class);







// Route::get('getTipoEvaluacion','TeacherEval\StudentEvaluationController@getTipoEvaluacion');
// Route::get('index','TeacherEval\StudentEvaluationController@index');
=======
Route::apiResource('teacher_eval', 'App\Http\Controllers\TeacherEval\SelfAppraisalController');
Route::apiResource('teacher_eval_type', 'App\Http\Controllers\TeacherEval\EvaluationTypeController');
>>>>>>> e6a024fa36c780b4b4b9f3451952b4f75f743fe9
