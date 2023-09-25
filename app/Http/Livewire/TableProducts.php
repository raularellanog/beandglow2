<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class TableProducts extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.table-products', [
            'data' => DB::table('products')->orderBy('product_id', 'DESC')->paginate(20),
        ]);
    }
}
