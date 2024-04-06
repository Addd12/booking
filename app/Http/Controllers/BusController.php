<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bus;
use Illuminate\Http\Request;

class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::all(); //$buses is an object where we store the data retrieved form the buses table
        //echo gettype($bus);
        //dd($bus);
        return view("bus.index", compact("buses")); //compact() creates an array of buses
    }

    public function addBus()
    {
        return view("bus.add");
    }
    public function store(Request $request)
    {
        Bus::create([
            'brand'=> $request->brand,
            'seats'=> $request->seats,
            'available'=> $request->available,
        ]);
        return redirect()->route('buses')->with('success','New bus added!');
    }
}
