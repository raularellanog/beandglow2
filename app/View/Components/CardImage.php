<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardImage extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $id;
    public function __construct($url = null, $id = 0)
    {
        $this->url = $url;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-image');
    }
}
