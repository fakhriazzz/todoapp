<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datatask = Task::all();
        return view('task.index', compact('datatask'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status
        ]);

        return redirect(route('task.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $datatask = Task::find($id);
        return view('task.edit', compact('datatask'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $datatask= Task::find($id);
        $datatask->update($request->all());

        return redirect(route('task.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $datatask = Task::find($id);
        $datatask->delete();

        return redirect(route('task.index'));
    }
}
