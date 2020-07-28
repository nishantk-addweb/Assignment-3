<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\crud;
class crudcontroller extends Controller
{
    //
    function insert(Request $req){
    	$crud = new crud;
    	$crud->name=$req->name;
    	$crud->number=$req->number;
    	$crud->address=$req->address;
    	$crud->save();

    	return redirect()->back();
    }

    function show(Request $Req){
    	$data = crud::all();
    	return view('select',['data'=>$data]);
    }
}
