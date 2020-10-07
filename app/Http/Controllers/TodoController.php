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


    public function show($id)
    {

    }

    public function store(Request $request)
    {

    }
}
