<?php

namespace App\View\Components;

use Illuminate\View\Component;

class search extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

//    public $search;
    public function __construct()
    {
        //
//        $this->search = $search;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search');
    }
}