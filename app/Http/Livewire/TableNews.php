<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class TableNews extends Component
{
    use WithPagination;
    public function render()
    {
        $data = null;
        $data = DB::table('news')->where('new_status', 'A')->orderBy('new_date', 'DESC')->paginate(20);

        return view('livewire.table-news', [
            'data' => $data
        ]);
    }
}
