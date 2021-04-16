<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models;
use App\Models\emp;

class Admin extends Controller
{
    //get method
    public function create(){

        return view('Admin.Create');
    }

   //post method
   public function creating(Request $req){

     $database_name = new emp();

     $database_name->name = $req->name;
     $database_name->pass = $req->pass;
     $database_name->age = $req->age;
     $database_name->save();
     return redirect('/View');

  }


  public function show(){
      $data = emp::all();
      return view('Admin.view',['data'=>$data]);
  }

  public function delete($id){

    $data = emp::find($id);
    $data->delete();
    return redirect('/View');

  }


public function Edit($id)
{
     $data = emp::find($id);
     $data->all();
    return view('Admin.Edit',['data' =>$data]);
}


 public function Editing($id, Request $req){

    $data = emp::find($id);
    $data->name = $req->name;
    $data->pass = $req->pass;
    $data->age = $req->age;
    $data->save();
    return redirect('/View');


 }



public function hello(){
    return view('Ameer');
}





}
