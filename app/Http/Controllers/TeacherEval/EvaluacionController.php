<?php

namespace App\Http\Controllers\TeacherEval;

use App\Http\Controllers\Controller;
use App\Models\Ignug\State;
use App\Models\Ignug\Teacher;
use App\Models\TeacherEval\Evaluation;
use App\Models\TeacherEval\EvaluationType;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function index()
    {
        //return Evaluation::all();
        return "hola";
    }

    public function show($id)
    {
        $catalogue =  Catalogue::findOrFail($id);
//        $catalogue =  Catalogue::where('id',$id)->get();
        return response()->json([
            'data' => [
                'catalogue' => $catalogue
            ]]);
    }

    public function store(Request $request)
    {
        $data = $request->json()->all();
        $dataEvaluation = $data['evaluation'];
        $dataTeacher = $data['teacher'];
        $dataEvaluationType = $data['evaluation_type'];
        $dataState = $data['state'];

        $evaluation = new Evaluation();
        $evaluation->result = $dataEvaluation['result'];

        $state = State::findOrFail($dataState['id']);
        $teacher = Teacher::findOrFail($dataTeacher['id']);
        $evaluationType = EvaluationType::findOrFail($dataEvaluationType['id']);

        $evaluation->state()->associate($state);
        $evaluation->teacher()->associate($teacher);
        $evaluation->evaluationType ()->associate($evaluationType);


        $evaluation->save();

        return response()->json([
        'data' => [
            'evaluation' => $evaluation
        ]
    ], 201);
    }

    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $dataCatalogue = $data['catalogue'];
        $dataState = $data['state'];

        $catalogue = Catalogue::findOrFail($id);
        $catalogue->code = $dataCatalogue['code'];
        $catalogue->name = $dataCatalogue['name'];
        $catalogue->icon = $dataCatalogue['icon'];
        $catalogue->type = $dataCatalogue['type'];

        $state = State::findOrFail($dataState['id']);
        $catalogue->state()->associate($state);
        $catalogue->save();
        return response()->json([
            'data' => [
                'evaluaciones' => $catalogue
            ]
        ], 201);
    }

    public function destroy($id)
    {
        $catalogue = Catalogue::findOrFail($id);
        $catalogue->delete();
//        $catalogue->update([
//            'code'=>'0'
//        ]);

        //$catalogue->code = '0';
//        $catalogue->save();

        return response()->json([
            'data' => [
                'evaluaciones' => $catalogue
            ]
        ], 201);
    }
}

