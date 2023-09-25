<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardImageProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $url;
    public $number;
    public $image_product_id;
    public function __construct($url = null, $number = 0, $image_product_id = 0)
    {

        $this->url = $url;
        $this->number = $number;
        $this->image_product_id = $image_product_id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-image-product');
    }
}
