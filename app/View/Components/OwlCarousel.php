<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OwlCarousel extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $articles;
    public function __construct($articles)
    {
        $this->articles = json_decode($articles, true);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.owl-carousel');
    }
}
