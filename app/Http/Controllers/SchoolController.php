<?php

namespace App\Http\Controllers;

use App\Models\SchoolGallery;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $school_galleries = SchoolGallery::all();
        return view('school.index', compact('school_galleries'));
    }
}
