<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todo.index')->with('todos', $todos);
    }

    public function show($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todo.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todo.create');
    }
}
