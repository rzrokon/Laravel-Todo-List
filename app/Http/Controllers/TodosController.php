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

    public function store(Request $requests)
    {
        //dd($requests->all());

        $todo = new Todo;
        $todo->todo = $requests->entertodo;
        $todo->save();

        return redirect()->back();
    }

    public function delete($id){

        // dd($id);

        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();

    }

    public function update($id){
        $todo = Todo::find($id);

        return view('update')->with('task', $todo);
    }

    public function save(Request $requests, $id){

        $todo = Todo::find($id);

        $todo->todo = $requests->entertodo;

        $todo->save();

        return redirect()->route('todos');

    }

    public function completed($id){

        $todo = Todo::find($id);

        $todo->completed = 1;

        $todo->save();

        return redirect()->back();

    }


}
