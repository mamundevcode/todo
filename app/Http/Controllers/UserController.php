<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function __construct(){
        $this->middleware ('auth');
    }
    public function index(){
        return view('admin.user.all');
    }
    public function add(){

    }

    public function edit(){

    }

    public function view(){

    
    } 

    public function update(){

    
    }

    public function delete(){

    
    }

    public function restore(){

    }
   
}
