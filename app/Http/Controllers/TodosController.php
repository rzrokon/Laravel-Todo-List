<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('todos')->with('tasks', $todos);
    }
}
