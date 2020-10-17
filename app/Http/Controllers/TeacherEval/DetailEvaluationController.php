<?php

namespace App\Http\Controllers\TeacherEval;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ignug\State;
use App\Models\Ignug\Teacher;
use App\Models\TeacherEval\DetailEvaluation;

class DetailEvaluationController extends Controller
{
    public function index()
    {
         return DetailEvaluation::all();
    }

    public function show($id)
    {
        $detailEvaluation =  DetailEvaluation::findOrFail($id);
//        $catalogue =  Catalogue::where('id',$id)->get();
        return response()->json([
            'data' => [
                'detailEvaluation' => $detailEvaluation
            ]]);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();
        
        $dataDetailEvaluation = $data['detailEvaluation'];
        $dataState = $data['state'];

        $detailEvaluation = new DetailEvaluation();
        $detailEvaluation->detail_evaluationable_id= $dataDetailEvaluation['detail_evaluationable_id'];
        $detailEvaluation->detail_evaluationable_type = $dataDetailEvaluation['detail_evaluationable_type'];

        $state = State::findOrFail($dataState['id']);
        $teacher = Teacher::findOrFail($dataDetailEvaluation['detail_evaluationable_id']);

        $detailEvaluation->state()->associate($state);
        $teacher->detailEvaluations()->save($detailEvaluation);

        return response()->json([
        'data' => [
            'detailEvaluation' => $teacher
        ]
    ], 201);
    }
    
}
