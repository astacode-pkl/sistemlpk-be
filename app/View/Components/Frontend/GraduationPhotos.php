<?php

namespace App\View\Components\Frontend;

use Closure;
use App\Models\Gallery;
use App\Models\Category;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;

class GraduationPhotos extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct() {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $galleries =[];
        $tblGalleries = DB::table('galleries')
            ->join('categories', 'galleries.category_id', '=', 'categories.id')
            ->select('galleries.*', 'categories.title as category_title')
            ->get();
        foreach ($tblGalleries as $gallery) {
            if ($gallery->category_title == 'Kelulusan') {
                $galleries[] = $gallery;
            }
        }
        return view('components.frontend.graduation-photos', compact('galleries'));
    }
}
