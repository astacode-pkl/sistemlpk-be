<?php

namespace App\Http\Controllers;

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
        // $logo = 'logo.profile/Y7dLxp7IIQ2KElyXDNMPNbXy3AlimL0BbdiacpWt.png';
        Cache::put('logo', $logo);
        if (!Auth::check()) {
            return view('login');
        }
        return view('layouts.dashboard');
    }
}
