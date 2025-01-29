<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\Regulation;

class DashboardController extends Controller
{

    public function index()
    {
        $categories = Category::count();
        $galleries = Gallery::count();
        $regulatios = Regulation::count();
        $programs = Program::count();
        $benefits = Benefit::count();
        $inbox = Contact::count();


        return view('layouts.dashboard',['categories' => $categories,'galleries' => $galleries, 'regulations' =>$regulatios,'programs'=> $programs,'benefits' => $benefits,'inbox' => $inbox]);
    }
}
