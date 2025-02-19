<?php

namespace App\View\Components\Frontend;

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
        public array $graduations
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.frontend.graduation-photos');
    }
}
