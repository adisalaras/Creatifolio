<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectOrder;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        $projects = Project::orderBy('id', 'desc')->take(6)->get(); 
        $testimonials = Testimonial::all();
        return view('front.index', [
            'projects'=> $projects, //compact data);
            'testimonials'=>$testimonials,
        ]);
        
    }

    public function details(Project $project){
        return view('front.details', [
            'project'=> $project //compact data);
        ]);
    }

    public function services(){
        return view('front.services');
    }
    public function book(){
        return view('front.book');
    }

    public function store(Request $request){
        //dd($request->all()); ngecek data masuk atau tidak
        $validated= $request->validate([
            'name'=> 'required|string|max:255',
            'email'=> 'required|string|max:255',
            'category' => 'required|string',
            'brief'=> 'required|string|max:65535',
            'budget'=> 'required|integer',
        ]);

        DB::beginTransaction();
        try{
            
            $newProject = ProjectOrder::create($validated);

            DB::commit();
            return redirect()->route('front.index')->with('succes', 'Project Created Succesfully');
        }
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System eror'.$e->getMessage());
        }
    }
}
