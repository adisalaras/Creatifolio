<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonials.index', [
            'testimonials'=> $testimonials //compact data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=> 'required|string|max:255',
            'role'=> 'required|string|max:255',
            'testimony'=> 'required|string|max:65535',
            'logo' => 'required|image|mimes:png|max:2048',
            'rate' => 'required|numeric',
        ]);

        DB::beginTransaction();
        try{
            if($request->hasFile('logo')){
                $path = $request->file('logo')->store('testimonials','public');
                $validated['logo']=$path;
            }
            
            $newProject =Testimonial::create($validated);

            DB::commit();
            return redirect()->route('admin.testimonials.index')->with('succes', 'Testimonials Created Succesfully');
        }
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System eror'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', [
            'testimonial'=> $testimonial //compact data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated= $request->validate([
            'name'=> 'required|string|max:255',
            'role' => 'required|string',
            'logo' => 'sometimes|image|mimes:png|max:2048',
            'testimony' =>'required|string',
            'rate' => 'required|numeric',
            
        ]);

        DB::beginTransaction();
        try{
            if($request->hasFile('logo')){
                $path = $request->file('logo')->store('testimonials','public');
                $validated['logo']=$path;
            }

            $testimonial->update($validated);

            DB::commit();
            return redirect()->route('admin.testimonials.index')->with('succes', 'Testimonials Created Succesfully');
        }
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System eror'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        try{
            $testimonial->delete();
            return redirect()->back()->with('succes','Tool deleted sussesfully');
        }
        catch(\Exception $e){
            DB::rollBack();

            return redirect()->back()->with('error', 'System eror'.$e->getMessage());
        }
    }
}
