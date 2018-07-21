<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

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

        Session::flash('success',"Todo added successfuly");

        return redirect()->back();
    }

    public function delete($id){
        // delete the todo with the id $id
        $todo = Todo::find($id);
        $todo->delete();

        Session::flash('error','Selected todo was deleted');

        return redirect()->back();
    }

    public function complete($id){
        // delete the todo with the id $id
        $todo = Todo::find($id);

        $todo->completed = 1;

        $todo->save();
        
        Session::flash('success','Todo was marked completed succussfuly');

        return redirect()->route('todos');
    }

    public function edit($id){
        // edit the todo with the id $id
        $todo = Todo::find($id);


        return view("edit")->with('todo',$todo);
    }

    public function update(Request $request , $id){
        // edit the todo with the id $id
        $todo = Todo::find($id);

        $todo->todo = $request->todo;

        $todo->save();

        Session::flash('success','Selected todo was update');

        return redirect()->route('todos');
    }
}
