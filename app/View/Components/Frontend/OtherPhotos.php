<?php

namespace App\View\Components\Frontend;

use App\Models\Gallery;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OtherPhotos extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $galleries = Gallery::get();
        return view('components.frontend.other-photos',compact('galleries'));
    }
}
