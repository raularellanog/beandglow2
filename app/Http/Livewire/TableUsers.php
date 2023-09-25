<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use  App\Models\User;

class TableUsers extends Component
{
    use WithPagination;

    public $search;
    public function mount()
    {
        $this->search = null;
    }
    public function render()
    {
        return view('livewire.table-users',[
            'data'=>DB::table('users')->orderBy('id', 'DESC')->paginate(20),
        ]);
    }
}
