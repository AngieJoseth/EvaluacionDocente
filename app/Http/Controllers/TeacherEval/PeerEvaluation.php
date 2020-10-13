<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeerEvaluation extends Controller
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
