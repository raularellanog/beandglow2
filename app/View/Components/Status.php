<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Status extends Component
{
    /**
     * Create a new component instance.
     */
    public $status;
    public $text;
    public function __construct($status = 'A')
    {
        $this->status = $status;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->text = 'Activo';
        if ($this->status == 'I') {
            $this->text = 'Inactivo';
        }
        if ($this->status == 'E') {
            $this->text = 'Eliminado';
        }
        return view('components.status');
    }
}
