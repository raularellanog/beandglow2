<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BtnCart extends Component
{
    public $contador;


    public function render()
    {
        $user_id = session('user')->id;
        $this->contador = DB::table('carts')->where('user_id', $user_id)->where('is_order', 0)->sum('quantity');
        return view('livewire.btn-cart');
    }
    public function actualizar()
    {
        $this->emit('render');
    }
}
