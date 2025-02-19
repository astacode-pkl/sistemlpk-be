<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegulationController extends Controller
{
    public function index()
    {
        $programs = Program::all();
        return view('frontend.regulations', [
            'programs' => $programs
        ]);
    }
}
