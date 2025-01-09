<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLinks extends Component
{
    /**
     * Create a new component instance.
     * @param bool $mobile Special use case for mobile view in main nav only, do not use outside of main nav
     */
    public function __construct(public bool $mobile = false)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.nav-links');
    }
}
