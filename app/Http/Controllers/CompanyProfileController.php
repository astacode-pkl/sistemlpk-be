<?php

namespace App\Http\Controllers;

use App\Models\LogHistory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Cache;
use App\Helpers\ImageHelper;
use Illuminate\Support\Facades\Crypt;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyProfile = CompanyProfile::first()->get();
        return view('companyprofile', compact('companyProfile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'logo' => 'image|mimes:jpeg,png,jpg',
                'logo_type' => 'image|mimes:jpeg,png,jpg',
                'logo_mark' => 'image|mimes:jpeg,png,jpg',
                'advertisement' => 'image|mimes:jpeg,png,jpg',
            ]
        );
        $id = Crypt::decryptString($id);
        $table = CompanyProfile::find($id);
        $table->name = $request->name;
        $table->slogan = $request->slogan;
        $table->history = $request->history;
        $table->vision = $request->vision;
        $table->mission = $request->mission;
        $table->email = $request->email;
        $table->instagram = $request->instagram;
        $table->whatsapp = $request->whatsapp;
        $table->tiktok = $request->tiktok;
        $table->address = $request->address;

        function get_string_between($string, $start, $end)
        {
            $string = ' ' . $string;
            $ini = strpos($string, $start);
            if ($ini == 0) return '';
            $ini += strlen($start);
            $len = strpos($string, $end, $ini) - $ini;
            return substr($string, $ini, $len);
        }
        if(Str::contains($request->map, 'src="')){
            $table->map = get_string_between( $request->map, 'src="', '"');
        }else{
            $table->map = $request->map;
        }
        $logoType = $table->logo_type;
        $logo = $table->logo;
        $logoMark = $table->logo_mark;
        $advertisement = $table->advertisement;
        if ($request->file('logo') !== null) {
            # code...
            ImageHelper::deleteImage($table->image);
            $logo = ImageHelper::processImage($request->file('logo'), 'images/company-profile/');
        }
        if ($request->file('logo_type') !== null){
            ImageHelper::deleteImage($table->image);
            $logoType = ImageHelper::processImage($request->file('logo_type'), 'images/company-profile/');
        }
        if ($request->file('logo_mark') !== null) {
            # code...
            ImageHelper::deleteImage($table->image);
            $logoMark = ImageHelper::processImage($request->file('logo_mark'), 'images/company-profile/');
        }
        if ($request->file('advertisement') !== null) {
            # code...
            ImageHelper::deleteImage($table->image);
            $advertisement = ImageHelper::processImage($request->file('advertisement'), 'images/company-profile/');
        }
        
        $oldData = CompanyProfile::where('id',$id)->get();
        $table->update(['logo' => $logo,'logo_type' => $logoType,'logo_mark' => $logoMark,'advertisement' => $advertisement]);
        $newData = CompanyProfile::where('id',$id)->get();
        Cache::put('companyprofile', $newData);
        LogHistory::record('Update',  auth()->user()->name.' updated Company Profile',$newData,$oldData);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
