<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use DB;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $animals = Animal::all();
        $animals = DB::table('animals')
        //  ->select()
         ->get();
        // dd($animals);
        return view('Animals.index',compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Animals.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $animal = new Animal;

        if($request->hasFile('img_path'))
        {
            $img_path = $request->file('img_path')->getClientOriginalName();
            $request->file('img_path')->storeAs('public/images', $img_path);
        }


        $animal->animal_Name = $request->animal_Name;
        $animal->animal_Breed = $request->animal_Breed;
        $animal->animal_Age = $request->animal_Age;
        $animal->animal_Birthday = $request->animal_Birthday;
        $animal->animal_Gender = $request->animal_Gender;
        $animal->img_path = 'storage/images/'.$img_path;
        $animal->save();
        return redirect()->route('animals.index');
        // dd($animal);
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
        // dd('pasok');
        $animal = Animal::where('animal_ID', $id)->first();
        return view('Animals.edit',compact('animal'));
        
        // dd($animal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        Animal::where('animal_ID', $id)->update([
            'animal_Name' => $request->animal_Name,
            'animal_Breed' => $request->animal_Breed,
            'animal_Age' => $request->animal_Age,
            'animal_Birthday' => $request->animal_Birthday,
            'animal_Gender' => $request->animal_Gender,
        ]);
        
        return redirect()->route('animals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Animal::where('animal_ID', $id)->delete([]);
        return redirect()->route('animals.index');
    }

}
