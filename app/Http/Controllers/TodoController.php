<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::latest()->paginate(5);
  
        return view('todos.index',compact('todos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);

        Todo::create($request->all());

        return redirect()->route('todos.index')->with('success','todo created successfully');
    }

    public function show(Todo $todo)
    {
        return view('todos.show',compact('todo'));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit',compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'task' => 'required',
            'description' => 'required',
            'date' => 'required',
        ]);

        $todo->update($request->all());

        return redirect()->route('todos.index')->with('success','Todos updated successfully');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('todos.index')->with('success','Todos deleted successfully');
    }
}
