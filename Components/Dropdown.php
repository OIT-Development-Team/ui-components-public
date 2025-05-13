<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Create a new component instance.
     *
     * @param  string  $alignment  The alignment of the dropdown, either left or right
     * @param  string  $type  The type of the dropdown, either default or simple (simple is not positioned absolute/relative, works like a simple hide/show)
     */
    public function __construct(public string $alignment = 'left', public string $type = 'default')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dropdown');
    }
}
