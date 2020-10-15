<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeacherEval\EvaluationType;


class StudentEvaluation extends Controller
{
    
    public function getEvaluationType(){
        $evaluacion= EvaluationType::get();
        return response()->json(['type'=>$evaluacion],200);
    }

    public function index(){
        return "Hola mundo";
    } 

    public function store(Request $request){
        return $request;
    }

    public function update(Request $request){
        return $request;
    }

    public function destroy($id){
        return $id;
    }

}
