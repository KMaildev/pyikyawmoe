<?php

namespace App\Http\Controllers;

use App\Models\TechnicalInternPhoto;
use Illuminate\Http\Request;

class TechnicalInternController extends Controller
{
    public function index()
    {
        $technical_intern_photos = TechnicalInternPhoto::all();
        return view('technical_intern.index', compact('technical_intern_photos'));
    }
}
