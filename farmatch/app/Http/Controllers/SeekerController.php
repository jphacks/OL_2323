<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seeker;

class SeekerController extends Controller
{
    public function index() {
        $seekers = Seeker::all();
        return view('seeker.index', compact('seekers'));
    }
    
}
