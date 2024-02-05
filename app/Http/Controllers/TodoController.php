<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;
use Carbon\Carbon;

class TodoController extends Controller{

    public function __construct(){
        $this->middleware ('auth');
    }
    public function index(){
        $data = todos::get();
        return view('admin.todo.all',compact('data'));   
    }
    public function add(){
        return view('admin.todo.add');
    }
    public function edit(Request $request){
        $request->validate([
            'name'=>'required',
            'work'=>'required',
            'date'=>'required',
            'email'=>'required',
        ]);
        $edit = todos::edit([
            'name'=> $request->name,
            'work'=>$request->work,
            'date'=>$request->date,
            'email'=>$request->email,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect();
    
    }
    public function insert(Request $request){
        $request->validate([
            'name'=>'required',
            'work'=>'required',
            'date'=>'required',
        ]);

        $insert = todos::insert([
            'name'=> $request->name,
            'work'=>$request->work,
            'date'=>$request->date,
            'email'=>$request->email,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);
        return redirect('dashboard/todo');
    }
    public function update(){

    
    }
    public function delete(){

    
    }
    public function restore(){

    
    }
}
