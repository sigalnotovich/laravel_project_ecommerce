<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class ToDosController extends Controller
{
    public function index(){
        //fatch all todos from database and displey them in the todo page
//        $todos = Todo::all(); //will fetch all the databse recordes in the todo table
        return view('todos.index');
//        return view('index')->with('todos',$todos);
    }
}
