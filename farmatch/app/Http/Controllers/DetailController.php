<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DetailController extends Controller
{
    public function show_detail($id) {
        $user = User::findOrFail($id);

        if ($user->is_farmer == true) {
            $farmer = User::with('farmers')->findOrFail($id);
            return view('detail', compact('farmer'));
        } else {
            $seeker = $user->with('seeker');
            return view('detail', compact('seeker'));
        }
    }
}
