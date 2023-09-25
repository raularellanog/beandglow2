<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $type;
    public $password;
    public $user;

    public function mount()
    {
        $user = null;
        $this->email = null;
        $this->password = null;
        $this->user = Auth::user();
    }
    public function login_form()
    {
        try {
            session()->forget('user');
            session()->forget('login');
            $validatedData = $this->validate(
                [
                    'email' => 'required|email',
                    'password' => 'required'
                ],
                [
                    'email.required' => 'El email es un dato requerido.',
                    'password.required' => 'La contraseña es un dato requerido.',
                ],
            );
            $credentials = ['email' => trim($this->email), 'password' => trim($this->password)];

            if (Auth::attempt($credentials)) {
                session(['user' => Auth::user()]);
                session(['login' => true]);
                return redirect()->to('/admin/dashboard');
            }
            $this->addError('noLogin', 'Usuario y contraseña incorrecta vuelve a intentarlo.');
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function nuevo()
    {
        return User::create([
            'name' => 'raul',
            'email' => 'raularellanoguevara@gmail.com',
            'password' => Hash::make('123456789')
        ]);
    }
    public function ver()
    {

        // $this->nuevo();
        if ($this->type == "password") {
            $this->type = "text";
        } else {
            $this->type = "password";
        }
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.admin.login');
    }
    public function redirectLogin()
    {
        if ($this->user) {
            return redirect()->to('/admin/dashboard');
        }
    }
}
