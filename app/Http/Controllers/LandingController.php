<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use DB;

class LandingController extends Controller
{
    

    public function index ()
    {
        

        $all = Animal::all();

        // dd($all);

        return view('WelcomePage.index',compact('all'));
    }


}
