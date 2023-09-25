<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TypeProduct extends Component
{
    /**
     * Create a new component instance.
     */
    public $type;
    public $text;
    public function __construct($type = 0)
    {
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->text = 'Servicio';
        if ($this->type  == 1) {
            $this->text = 'Producto';
        }

        return view('components.type-product');
    }
}
