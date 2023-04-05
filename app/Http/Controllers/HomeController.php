<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Property;

class HomeController extends Controller
{
   
    public function index()
    {
        $properties = Property::latest()->take(3)->get();
        $agents = Agent::take(3)->get();
        return view('home', compact('properties', 'agents'));
    }

    public function properties()
    {
        $properties = Property::get();
        return view('properties', compact('properties', ));
    }

    public function agents()
    {
        $agents = Agent::get();
        return view('agents', compact( 'agents'));
    }

    public function viewProperty($id)
    {
        $property = Property::find($id);

        return view('property', compact('property'));
    }
}
