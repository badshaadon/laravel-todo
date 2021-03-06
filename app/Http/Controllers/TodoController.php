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

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->compeleted = false;
        $todo->save();

        session()->flash('success', 'Todo Added Created Successfully');

        return redirect('/todos');
    }

    public function edit($todoId)
    {
        $todo = Todo::find($todoId);
        return view('todo.edit')->with('todo', $todo);
    }

    public function update($todoId)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();
        $todo = Todo::find($todoId);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo Updated Successfully');

        return redirect('/todos');
    }

    public function destroy($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->delete();

        session()->flash('success', 'Todo Added Deleted Successfully');

        return redirect('/todos');
    }

    public function compeleted($todoId)
    {
        $todo = Todo::find($todoId);
        $todo->compeleted = true;
        $todo->save();

        session()->flash('success', 'Todo Added Compeleted Successfully');

        return redirect('/todos');
    }
}
