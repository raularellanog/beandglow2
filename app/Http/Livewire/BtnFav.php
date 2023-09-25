<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;


class BtnFav extends Component
{

    public $contador;
    public function render()
    {
        $user_id = session('user')->id;
        $this->contador = DB::table('favorites')->where('user_id', $user_id)->count();
        return view('livewire.btn-fav');
    }
    public function actualizar()
    {
        $this->emit('render');
    }
}
