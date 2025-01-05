<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest('id')->paginate(5);
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'link' => 'required|url',
        ]);
        $image  = $request->file('image')->store('uploads/projects', 'custom');
        Project::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'link' => $request->link,
        ]);
        return redirect()->route('admin.projects.index')->with(['msg' => 'Project created.', 'type' => 'success']);
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
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
            'description' => 'required',
            'link' => 'required|url',
        ]);
        $image = $project->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads/projects', 'custom');
        }
        $project->update([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
            'link' => $request->link,
        ]);
        return redirect()->route('admin.projects.index')->with(['msg' => 'Project updated.', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect()->route('admin.projects.index')->with(['msg' => 'Project deleted.', 'type' => 'danger']);
    }
}
