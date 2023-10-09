<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rescuer;
use DB;

class RescuerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rescuers = DB::table('rescuers')
        //  ->select()
         ->get();
        return view('Rescuers.index',compact('rescuers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Rescuers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rescuer = new Rescuer();
        $rescuer->rescuer_Name = $request->rescuer_Name;
        $rescuer->rescuer_ContactNumber = $request->rescuer_ContactNumber;
        $rescuer->rescuer_Address = $request->rescuer_Address;
        $rescuer->rescuer_Age = $request->rescuer_Age;
        $rescuer->rescuer_Birthday = $request->rescuer_Birthday;
        $rescuer->rescuer_Gender = $request->rescuer_Gender;
        $rescuer->save();
        return redirect()->route('rescuers.index');
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
        $rescuer = Rescuer::where('rescuer_ID', $id)->first();
        return view('Rescuers.edit',compact('rescuer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Rescuer::where('rescuer_ID', $id)->update([
            'rescuer_Name' => $request->rescuer_Name,
            'rescuer_ContactNumber' => $request->rescuer_ContactNumber,
            'rescuer_Address' => $request->rescuer_Address,
            'rescuer_Age' => $request->rescuer_Age,
            'rescuer_Birthday' => $request->rescuer_Birthday,
            'rescuer_Gender' => $request->rescuer_Gender,
        ]);
        
        return redirect()->route('rescuers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Rescuer::where('rescuer_ID', $id)->delete([]);
        return redirect()->route('rescuers.index');
    }
}
