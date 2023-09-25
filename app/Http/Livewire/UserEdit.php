<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserEdit extends Component
{
    public $user_id;
    public $type;
    public $name;
    public $email;
    public $pass;
    public $icono;

    public function mount($user_id = null)
    {
        $user = DB::table('users')->where('id', $user_id)->first();
        if ($user) {
            $this->user_id = $user->id;
            $this->name = $user->name;
            $this->email = $user->email;
            $this->id = $user->id;
        }
        $this->pass = "";
        $this->type = "password";
        $this->icono = '<i class="fa-regular fa-eye"></i>';
    }
    public function render()
    {
        return view('livewire.user-edit');
    }
    public function change_pass()
    {
        if ($this->type == "text") {
            $this->type = "password";
            $this->icono = '<i class="fa-regular fa-eye"></i>';
        } else {
            $this->type = "text";
            $this->icono = '<i class="fa-regular fa-eye-slash"></i>';
        }
    }
    public function generate_pass()
    {
        $pass = substr(str_shuffle('abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 8);
        $this->pass = $pass;
        $this->type = "text";
        $this->icono = '<i class="fa-regular fa-eye-slash"></i>';
    }
    public function save_data()
    {
        try {

            $validatedData = $this->validate([
                'name' => 'required',
                'email' => 'required|email',
            ]);

            $update = DB::table('users')->where('id', $this->user_id)->update([
                'name' => ucwords(trim($this->name)),
                'email' => trim($this->email),
            ]);
            $this->dispatchBrowserEvent('success', ['message' => 'Datos Guardados']);
            $this->emit('render');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error al guardar los datos']);
        }
    }
    public function save_pass()
    {
        try {
            $validatedData = $this->validate([
                'pass' => 'required',
            ]);
            $update = DB::table('users')->where('id', $this->user_id)->update([
                'password' => Hash::make(trim($this->pass))
            ]);

            $this->dispatchBrowserEvent('success', ['message' => 'Contraeña guardada']);
            $this->emit('render');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error al guardar la contraseña']);
        }
    }
}
