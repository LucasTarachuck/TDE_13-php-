<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $projects = Project::all();
      return view('projects.index', compact('projects'));
    }  
    public function create()
    {
      $projects = Project::all();
      return view('projects.create', compact('projects'));
    }
    public function store(Request $request)
    {
      ProjectController::create($request->all());
      return redirect('projects')->with('success', 'Project create successfully');
    }
    public function edit($id)
    {
      $project = Project::findOrFail($id);
      return view('projects.edit', compact('projects'));
    }
    public function update(Request $request, $id)
    {
      $project = Project::findOrFail($id);
      $project->update($request->all());
      return redirect('project')->with('Success', 'Project updated successfully');
    }
    public function destroy($id)
    {
      $project = Project::findOrFail($id);
      $project->delete();
      return redirect('project')->with('Success', 'Project deleted successfullty');
    }   
}
