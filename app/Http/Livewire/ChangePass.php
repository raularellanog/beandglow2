<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Support\Facades\Mail;

use App\Mail\MailableChangePass;

class ChangePass extends Component
{

    public $email;
    public $type;

    public $password;
    public $confpassword;

    public $user;
    public $icono;


    public $user_id;
    public $name;
    public $phone;

    public function mount()
    {
        $user_id = session('user')->id;
        $this->user_id = $user_id;
        $data = DB::table('users')->where('id', $user_id)->first();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->type = 'password';
        $this->icono = '<i class="fa-solid fa-eye"></i>';
    }

    public function render()
    {
        return view('livewire.change-pass');
    }

    public function ver()
    {
        if ($this->type == "password") {
            $this->type = "text";
            $this->icono = '<i class="fa-solid fa-eye-slash"></i>';
        } else {
            $this->type = "password";
            $this->icono = '<i class="fa-solid fa-eye"></i>';
        }
        $this->emit('render');
    }

    public function actualizar()
    {
        try {
            $validatedData = $this->validate(
                [
                    'password' => 'min:6|required_with:confpassword|same:confpassword',
                ],
            );

            $user =  User::where('id', $this->user_id)->update([
                'password' => Hash::make($this->password),
            ]);
            Mail::to('raularellanoguevara@gmail.com')->send(new MailableChangePass());
            $this->dispatchBrowserEvent('success', ['message' => 'Datos actualizados.']);
        } catch (\Throwable $th) {
            dd($th);
            $this->dispatchBrowserEvent('error', ['message' => 'Datos no guardados algo esta mal.']);
            //throw $th;
        }
        $this->emit('render');
    }
}
