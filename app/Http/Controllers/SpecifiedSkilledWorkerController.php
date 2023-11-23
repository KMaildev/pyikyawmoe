<?php

namespace App\Http\Controllers;

use App\Models\SSWJob;
use Illuminate\Http\Request;

class SpecifiedSkilledWorkerController extends Controller
{
    public function index()
    {
        $s_s_w_jobs = SSWJob::all();
        return view('specified_skilled.index', compact('s_s_w_jobs'));
    }
}
