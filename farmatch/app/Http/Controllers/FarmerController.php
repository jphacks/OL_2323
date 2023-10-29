<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Farmer;

class FarmerController extends Controller
{
    public function index() {
        $farmers = Farmer::all();
        return view('farmer.index', compact('farmers'));
    }
    
}
