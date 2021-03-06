<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    //

    public function index()
    {

        $todos = Todo::all();

      return view('todos.todos')->with([
          'todos' =>$todos
      ]);
    }

    

    public function show(Todo $todo)
    {
      return view('todos.todo')->withTodo($todo);
    }



    public function edit()
    {
      return view('todos.edit-todo');
    }


    public function store(Request $request)
    {
        Todo::create([
          'user_id'=>1,
          'content'=> $request->todo
        ]);

        return redirect(route('todos'));
    }


  
}
