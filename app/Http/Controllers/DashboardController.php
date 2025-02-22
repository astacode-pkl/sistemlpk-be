<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Hero;

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
        $countUnread = Contact::where('status', 'unread')->count();
        session(['countUnread' => $countUnread]);
        // incoming
        $categories = Category::count();
        $categoriesLastcreated = $categories ? Category::latest()->first()->created_at->diffForHumans() : 'Not created yet';

        $galleries = Gallery::count();
        $galleriesLastcreated = $galleries ? Gallery::latest()->first()->created_at->diffForHumans() : 'Not created yet';

        $regulatios = Regulation::count();
        $regulationsLastcreated = $regulatios ? Regulation::latest()->first()->created_at->diffForHumans() : 'Not created yet';

        $programs = Program::count();
        $programsLastcreated = $programs ? Program::latest()->first()->created_at->diffForHumans() : 'Not created yet';

        $benefits = Benefit::count();
        $benefitsLastcreated = $benefits ? Benefit::latest()->first()->created_at->diffForHumans() : 'Not created yet';


        $inbox = Contact::count();
        $inboxLastcreated = $inbox ? Contact::latest()->first()->created_at->diffForHumans() : 'No message yet';

        $heroes = Hero::count();
        $heroLastcreated = $heroes ? Hero::latest()->first()->created_at->diffForHumans() : 'No message yet';

        return view('dashboard', [
            'categories' => $categories,
            'categoriesLastcreated' => $categoriesLastcreated,
            'galleries' => $galleries,
            'galleriesLastcreated' => $galleriesLastcreated,
            'regulations' => $regulatios,
            'regulationsLastcreated' => $regulationsLastcreated,
            'programs' => $programs,
            'programsLastcreated' => $programsLastcreated,
            'benefits' => $benefits,
            'benefitsLastcreated' => $benefitsLastcreated,
            'inbox' => $inbox,
            'inboxLastcreated' => $inboxLastcreated,
            'heroes' => $heroes,
            'heroLastcreated' => $heroLastcreated,
        ]);
    }
}
