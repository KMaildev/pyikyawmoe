<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('about.index', compact('teams'));
    }

    public function ceo_message()
    {
        return view('about.ceo_message');
    }

    public function team()
    {
        $teams = Team::all();
        return view('about.team', compact('teams'));
    }
}
