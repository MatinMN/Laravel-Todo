<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class TodosController extends Controller
{

    public function index(){

        $todos = Todo::all();

        return view('todos')->with('todos',$todos);
    }

    public function add(Request $request){

        // get the todo sent by the user
        $todo = new Todo;

        $todo->todo = $request->todo;

        $todo->save(); // add the new todo to the database

        return redirect()->back();
    }

    public function delete($id){
        // delete the todo with the id $id
        $todo = Todo::find($id);
        $todo->delete();

        return redirect()->back();
    }
}
