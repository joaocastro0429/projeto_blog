<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class courseConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $users=Course::all();
        return view('course.index',compact('users'));
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)

    {
        
      return view('course.create');
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        $user=Course::create($request->all());

        return redirect()->route('course.index',compact('user'));
       
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $user=Course::find($id);


        return view('course.show',compact('user'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $user=Course::find($request->id);
        
      return view('course.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)

    {
        $user=Course::find($id);
        $data=$request->only(['name']);

        $user->update($data);


        return redirect()->route('course.show',[$user->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
   // app/Http/Controllers/SuaController.php



    public function delete($id)
    {
      Course::find($id)->delete();
        return redirect()->route('course.index');

      

    }
}
