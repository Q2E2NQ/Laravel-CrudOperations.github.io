<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
         return view('todo_create');
    }

    public function store(Request $request)
    {
        $res=new Todo;
        $res->name=$request->input('name');
        $res->save();

        $request->session()->flash('msg','data submitted');
        return redirect('todo_show');
    }

    
    public function show(todo $todo)
    {
        return view('todo_show')->with('todoArr',Todo::all());
    }

    
    public function edit(todo $todo,$id)
    {
        return view('todo_edit')->with('todoArr',Todo::find($id));
    }

    
    public function update(Request $request, Todo $todo)
    {
       print_r($request->id);
    }

    
    public function destroy(todo $todo,$id)
    {    
        Todo::destroy(array('id',$id));
        return redirect('todo_show');
    }
}
