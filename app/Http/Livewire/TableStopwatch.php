<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stopwatchs;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class TableStopwatch extends Component
{
    use WithPagination;

    public function render()
    {
        return view(
            'livewire.table-stopwatch',
            [
                'data' => DB::table('stopwatchs')->where('stopwatch_status', '!=', 'E')->orderBy('stopwatch_id', 'desc')->paginate(20)
            ]
        );
    }
}
