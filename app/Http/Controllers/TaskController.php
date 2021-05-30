<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Task::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tags' => 'array',
            'tags.*' => 'int'
        ]);
        $task = Task::create($request->all());
        if ($request->has('tags')) {
            $tags = Tag::whereIn('id', $request->tags)->get();
            $task->tags()->attach($tags);
        }
        return $task;
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Task::with('tags')->where('id', $id)->get();
    }

}
