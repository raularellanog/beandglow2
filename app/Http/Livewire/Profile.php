<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Profile extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $phone;

    public function mount()
    {
        $user_id = session('user')->id;
        $this->user_id = $user_id;
        $data = DB::table('users')->where('id', $user_id)->first();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
    }


    public function actualizar()
    {
        try {
            $validatedData = $this->validate(
                [
                    'email' => 'required',
                    'name' => 'required',
                    'phone' => 'required',
                ],
            );
            $user =  DB::table('users')->where('id', $this->user_id)->update([
                'phone' => $this->phone,
                'name' => ucwords($this->name),
                'email' => $this->email
            ]);
            $this->dispatchBrowserEvent('success', ['message' => 'Datos actualizados.']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Datos no actuaizado.']);
        }
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
