<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoptor;
use DB;

class AdoptorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $adoptors = Adoptor::all();
        $adoptors = DB::table('adoptors')
        //  ->select()
         ->get();
        // dd($adoptors);
        return view('Adoptors.index',compact('adoptors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Adoptors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd('pasok');
        $adoptor = new Adoptor();
        $adoptor->adoptor_Name = $request->adoptor_Name;
        $adoptor->adoptor_Contactnumber = $request->adoptor_Contactnumber;
        $adoptor->adoptor_Address = $request->adoptor_Address;
        $adoptor->adoptor_Age = $request->adoptor_Age;
        $adoptor->adoptor_Birthday = $request->adoptor_Birthday;
        $adoptor->adoptor_Gender = $request->adoptor_Gender;
        $adoptor->save();
        return redirect()->route('adoptors.index');
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
        //
        $adoptor = Adoptor::where('adoptor_ID', $id)->first();
        return view('Adoptors.edit',compact('adoptor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        Adoptor::where('adoptor_ID', $id)->update([
            'adoptor_Name' => $request->adoptor_Name,
            'adoptor_Contactnumber' => $request->adoptor_Contactnumber,
            'adoptor_Address' => $request->adoptor_Address,
            'adoptor_Age' => $request->adoptor_Age,
            'adoptor_Birthday' => $request->adoptor_Birthday,
            'adoptor_Gender' => $request->adoptor_Gender,
        ]);
        
        return redirect()->route('adoptors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Adoptor::where('adoptor_ID', $id)->delete([]);
        return redirect()->route('adoptors.index');
    }
}
