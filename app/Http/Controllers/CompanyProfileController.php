<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\File;

class CompanyProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyProfile = CompanyProfile::first()->get();
        return view('layouts.companyprofile', compact('companyProfile'));
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
        $table->map = $request->map;

        //         if ($image = $request->file('logo')) {
        //             $destinationPath = 'storage/logo';

        //             $originalFileName = $image->getClientOriginalName();
        //             $imageMimeType = $image->getMimeType();
        //             if (strpos($imageMimeType, 'image/') === 0) {
        //                 $imageName = date('YmdHis') . '' . str_replace(' ', '', $originalFileName);
        //                 $image->move($destinationPath, $imageName);

        //                 $sourceImagePath = public_path($destinationPath . $imageName);
        //                 $webpImagePath = $destinationPath . pathinfo($imageName, PATHINFO_FILENAME) . '.webp';

        //                 switch ($imageMimeType) {
        //                     case 'image/jpeg':
        //                         $sourceImage = @imagecreatefromjpeg($sourceImagePath);
        //                         break;
        //                     case 'image/png':
        //                         $sourceImage = @imagecreatefrompng($sourceImagePath);
        //                         break;
        //                     default:
        //                         $sourceImage = false;
        //                         break;
        //                 }

        //                 if ($sourceImage !== false) {
        //                     imagewebp($sourceImage, $webpImagePath);
        //                     imagedestroy($sourceImage);
        //                     @unlink($sourceImagePath);
        //                     // File::delete($sourceImagePath);
        // // dd($sourceImage);
        //                     $request['logo'] = pathinfo($imageName, PATHINFO_FILENAME) . '.webp';
        //                 }
        //                 // dd($sourceImage);
        //             }
        //         } else {
        //             $request['logo'] = '';
        //         }


        if ($request->file('logo')) {
            $table->logo = $request->file('logo')->store('logo');
        }

        $table->update();
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
