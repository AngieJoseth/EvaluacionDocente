<?php

namespace App\Http\Controllers\TeacherEval;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\TeacherEval\EvaluationType;


class StudentEvaluation extends Controller
{
    

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
