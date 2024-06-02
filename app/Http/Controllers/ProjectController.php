<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\Project as ModelsProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('admin.projects.index', [
            'projects'=> $projects //compact data
        ]);
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
        
        $validated= $request->validate([
            'name'=> 'required|string|max:255',
            'category' => 'required|string|in:Front End Developer,Back End Developer,Digital Marketing,Project Manajer',
            'cover' => 'required|image|mimes:png|max:2048',
            'about'=> 'required|string|max:65535'
        ]);

        DB::beginTransaction();
        try{
            if($request->hasFile('cover')){
                $path = $request->file('cover')->store('projects','public');
                $validated['cover']=$path;
            }
            $validated['slug']= Str::slug($request->name);

            $newProject =Project::create($validated);

            DB::commit();
            return redirect()->route('admin.projects.index')->with('succes', 'Project Created Succesfully');
        }
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System eror'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(project $project)
    {
        return view('admin.projects.edit', [
            'project'=> $project //compact data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $project)
    {
        //
    }
}
