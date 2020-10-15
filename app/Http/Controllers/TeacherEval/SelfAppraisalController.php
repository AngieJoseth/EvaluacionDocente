<?php

namespace App\Http\Controllers\TeacherEval;

use App\Http\Controllers\Controller;
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\Teacher;
use App\Models\Ignug\State;
use Illuminate\Http\Request;

class SelfAppraisalController extends Controller
{
    public function index(){
        return Catalogue::all();
    } 

    public function store(Request $request){
        $data = $request->json()->all();
        $dataTeacher = $data['self_results'];
        $dataState = $data['state'];

        $catalogue = new Teacher();
        $catalogue->code = $dataCatalogue['code'];
        $catalogue->name = $dataCatalogue['name'];
        $catalogue->icon = $dataCatalogue['icon'];
        $catalogue->type = $dataCatalogue['type'];

        return $request;
    }

    public function update(Request $request){
        return $request;
    }

    public function destroy($id){
        return $id;
    }
}
