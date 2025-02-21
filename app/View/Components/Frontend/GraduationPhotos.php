<?php

namespace App\View\Components\Frontend;

use App\Models\Category;
use Closure;
use App\Models\Gallery;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class GraduationPhotos extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
    
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $galleries = Gallery::get();
        return view('components.frontend.graduation-photos',compact('galleries'));
    }
}
