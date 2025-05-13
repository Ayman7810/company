<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\CategoryProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = CategoryProject::all();
        $projects = Project::latest()->paginate(config('myConfig.count'));
        
        if(request()->ajax()) {
            return view('admin.project.ajax-search', compact('projects'))->render();
        }
        
        return view('admin.project.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CategoryProject::all();
        return view('admin.project.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
       
        $image = $request->image;
        $newImageName = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('projects', $newImageName, 'public');
        $data['image'] = $newImageName;

        
        Project::create($data);
        return to_route('admin.project.index')->with('create-project-success' , __('shard.create-project-success'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
    
        return view('admin.project.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = CategoryProject::all();
        return view('admin.project.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
        $data = $request->validated();
        if ($request->hasFile('image')) {
            Storage::delete("public/projects/$project->image");
            $image = $request->image;
            $newImageName = time() . '-' . $image->getClientOriginalName();
            $image->storeAs('projects', $newImageName, 'public');
            $data['image'] = $newImageName;
        }

        $project->update($data);

        return to_route('admin.project.index')->with('edit-project-success' , __('shard.edit-project-success'));
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        
        Storage::delete("public/projects/$project->image");
        $project->delete();
        return to_route('admin.project.index')->with('delete-project-success' , __('shard.delete-project-success'));
    }


    public function search(Request $request)
    {
        $query = $request->input('query');
        $perPage = $request->input('per_page', config('myConfig.count')); 
    
        $projects = Project::when($query, function($q) use ($query) {
                $q->where('title', 'like', "%{$query}%")
                  ->orWhere('title_ar', 'like', "%{$query}%");
            })
            ->latest()
            ->paginate($perPage)
            ->withQueryString(); 
    
        return view('admin.project.ajax-search', compact('projects'))->render();
    }
}