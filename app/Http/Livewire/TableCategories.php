<?php

namespace App\Http\Livewire;

use Livewire\Component;
use  App\Models\Categories;

class TableCategories extends Component
{

    public function render()
    {
        return view('livewire.table-categories', [
            'data' => Categories::get()
        ]);
    }
}
