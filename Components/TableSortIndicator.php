<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableSortIndicator extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public bool $active, public bool $sortAsc) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table-sort-indicator');
    }
}
