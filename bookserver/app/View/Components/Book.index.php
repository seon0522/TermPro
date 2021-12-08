<?php

namespace App\View\Components;

use Illuminate\View\Component;

class index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $book_list;

    public function __construct($book_list)
    {
        //
        $this->book_list = $book_list;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book.index');
    }
}
