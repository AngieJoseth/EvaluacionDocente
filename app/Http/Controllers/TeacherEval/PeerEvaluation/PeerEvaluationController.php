<?php

namespace App\Http\Controllers\TeacherEval\PeerEvaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PeerEvaluationController extends Controller
{
    public function index(){
        return "Hola Cristian";
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
