<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
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
        $logo = CompanyProfile::select('logo')->first();
        $companyName = CompanyProfile::select('name')->first();


        Cache::put('logo', $logo);
        Cache::put('companyName', $companyName);

        $countUnread = Contact::where('status', 'unread')->count();
        session(['countUnread' => $countUnread]);


        if (!Auth::check()) {
            return view('login');
        }

        // incoming
        $categories = Category::count();
        $galleries = Gallery::count();
        $regulatios = Regulation::count();
        $programs = Program::count();
        $benefits = Benefit::count();
        $inbox = Contact::count();


        return view('dashboard', ['categories' => $categories, 'galleries' => $galleries, 'regulations' => $regulatios, 'programs' => $programs, 'benefits' => $benefits, 'inbox' => $inbox]);
    }
}
