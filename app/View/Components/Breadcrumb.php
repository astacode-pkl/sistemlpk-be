<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Breadcrumb extends Component
{
    public $currentUrl;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $urls = explode("/", url()->current());
        $urls = array_slice($urls, 3);
        $urls = str_replace('-', ' ', $urls);
        $currentUrl = end($urls);
        $this->currentUrl = $currentUrl;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $segments = collect(request()->segments())->filter(function ($segment) {
            $segment = (string) $segment;
            return strlen($segment) < 20;
        })->toArray(); // Mengambil segment dari URL
        return view('components.breadcrumb', compact('segments'));
    }
}
