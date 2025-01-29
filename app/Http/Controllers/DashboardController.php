<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

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
        return view('layouts.dashboard');
    }
}
