<?php

namespace App\Http\Controllers\TeacherEval;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ignug\State;
use App\Models\Ignug\Teacher;
use App\Models\TeacherEval\DetailEvaluation;
use App\Models\TeacherEval\EvaluationType;
use App\Models\TeacherEval\Evaluation;

class DetailEvaluationController extends Controller
{
    public function index()
    {
        return DetailEvaluation::all();
    }

    public function show($id)
    {
       $detailEvaluation =  DetailEvaluation::findOrFail($id);
        return response()->json([
            'data' => [
                'detailEvaluation' => $detailEvaluation
        ]]);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();
        
        $dataEvaluationType = $data['evaluation_type'];
        $dataTeacher = $data['teacher'];
        $dataEvaluators = $data['evaluators'];

        $evaluation = new Evaluation();
 
        $state = State::where('code', '1')->first();
        $teacher = Teacher::findOrFail($dataTeacher['id']);
        $evaluationType = EvaluationType::findOrFail($dataEvaluationType['id']);

        $evaluation->state()->associate($state);
        $evaluation->teacher()->associate($teacher);
        $evaluation->evaluationType()->associate($evaluationType);
        $evaluation->save();

        foreach($dataEvaluators as $evaluator)
        {
            $detailEvaluation = new DetailEvaluation;
            $detailEvaluation->state()->associate($state);
            $detailEvaluation->detailEvaluationable()->associate(Teacher::findOrFail($evaluator['id']));
            $detailEvaluation->evaluation()->associate($evaluation); 
            $detailEvaluation->save();   
        }
       
        return response()->json([
        'data' => [
            'detailEvaluation' => $evaluation
            ]
        ], 201);
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        
        $dataEvaluationType = $data['evaluation_type'];
        $dataTeacher = $data['teacher'];
        $dataEvaluators = $data['evaluators'];
        $dataState = $data['state'];
        
        $evaluation = Evaluation::findOrFail($id);
        $state = State::findOrFail($dataState['id']);
        $teacher = Teacher::findOrFail($dataTeacher['id']);
        $evaluationType = EvaluationType::findOrFail($dataEvaluationType['id']);

        $evaluation->state()->associate($state);
        $evaluation->teacher()->associate($teacher);
        $evaluation->evaluationType()->associate($evaluationType);
        $evaluation->save();

        foreach($dataEvaluators as $evaluator)
        {
            $detailEvaluation = DetailEvaluation::where('evaluation_id', $id)->first();
            $detailEvaluation->detailEvaluationable()->associate(Teacher::findOrFail($evaluator['id']));
            $detailEvaluation->save();   
        }

        return response()->json([
            'data' => [
                'evaluation' => $detailEvaluation
            ]
        ], 201);
    }
    public function destroy($id)
    {
        $evaluation = Evaluation::findOrFail($id);

        $evaluation->state_id = '3';
        $evaluation->save();

        $detailEvaluations = DetailEvaluation::where('evaluation_id',$id)->get();
        foreach($detailEvaluations as $detailEvaluation){
            $detailEvaluation->state_id = '3';
            $detailEvaluation->save();
        }

        return response()->json([
            'data' => [
                'detail_evaluation' => $detailEvaluation
            ]
        ], 201);
    }
    
}
