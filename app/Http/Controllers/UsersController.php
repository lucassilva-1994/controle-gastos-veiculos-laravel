<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function index(){
        return view("users.index");
    }
    
    public function new(){
        return view ("users.new");
    }
    
    public function create(UserRequest $request){
        $request->all();
    }
    
}
