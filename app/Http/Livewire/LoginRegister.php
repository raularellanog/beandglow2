<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailableRegister;
use App\Mail\MailableForgetPsw;


class LoginRegister extends Component
{
    public $email;
    public $type;
    public $password;
    public $user;
    public $icono;

    //register
    public $re_name;
    public $re_lastName;
    public $re_phone;
    public $re_email;
    public $re_password;
    public $re_Confpassword;
    ///

    /// forget
    public $forget_phone;
    public $forget_email;
    ////

    public $viewRegister;
    public $viewLogin;
    public $viewForget;

    public function mount()
    {
        $this->viewRegister = false;
        $this->viewForget = false;
        $this->viewLogin = true;
        $this->user = null;
        $this->email = null;
        $this->password = null;
        $this->user = Auth::user();
        $this->type = 'password';
        $this->icono = '<i class="fa-solid fa-eye"></i>';
        $this->valueRegister();
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
                $this->dispatchBrowserEvent('success', ['message' => 'Inicio de sesion realizado']);
                return redirect()->to('/shop');
            }
            $this->dispatchBrowserEvent('error', ['message' => 'Usuario y contraseña incorrecta vuelve a intentarlo.']);
            $this->addError('noLogin', 'Usuario y contraseña incorrecta vuelve a intentarlo.');
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Usuario y contraseña incorrecta vuelve a intentarlo.']);
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
            $this->icono = '<i class="fa-solid fa-eye-slash"></i>';
        } else {
            $this->type = "password";
            $this->icono = '<i class="fa-solid fa-eye"></i>';
        }
        $this->emit('render');
    }

    public function render()
    {
        if ($this->viewForget == true) {
            return view('livewire.forget-password');
        }
        if ($this->viewRegister == true) {
            return view('livewire.register');
        }

        return view('livewire.login-register');
    }
    public function redirectLogin()
    {
        if ($this->user) {
            return redirect()->to('/');
        }
    }

    public function irRegiter()
    {
        $this->valueRegister();
        $this->viewRegister = true;
        $this->viewLogin = false;
        $this->viewForget = false;
    }
    public function irLogin()
    {
        $this->valueRegister();
        $this->valueForget();
        $this->viewRegister = false;
        $this->viewLogin = true;
        $this->viewForget = false;
    }
    public function irForget()
    {
        $this->viewRegister = false;
        $this->viewLogin = false;
        $this->viewForget = true;
    }

    public function valueRegister()
    {

        $this->re_name = null;
        $this->re_lastName = null;
        $this->re_phone = null;
        $this->re_email = null;
        $this->re_password = null;
        $this->re_Confpassword = null;
    }



    public function register_form()
    {
        try {
            session()->forget('user');
            session()->forget('login');
            $validatedData = $this->validate(
                [
                    're_email' => 'required|email|unique:users,email',
                    're_name' => 'required',
                    're_phone' => 'required',
                    're_lastName' => 'required',
                    're_password' => 'min:6|required_with:re_Confpassword|same:re_Confpassword',
                ],
                [
                    're_email.required' => 'El email es un dato requerido.',
                    're_password.required' => 'La contraseña es un dato requerido.',
                ],
            );
            // $credentials = ['email' => trim($this->email), 'password' => trim($this->password)];
            $user = User::create([
                'name' =>  ucwords($this->re_name . ' ' . $this->re_lastName),
                'email' => trim($this->re_email),
                'password' => Hash::make($this->re_password),
                'phone' => trim($this->re_phone),
                'role' => 0
            ]);
            if ($user) {
                Mail::to('raularellanoguevara@gmail.com')->send(new MailableRegister());
                $this->dispatchBrowserEvent('success', ['message' => 'Usuario creado.']);
                $this->irLogin();
                $this->addError('Login', 'Usuario creado.');
            } else {
                $this->dispatchBrowserEvent('error', ['message' => 'Los datos son incorrectos']);
                $this->addError('noRegister', 'Los datos son incorrectos');
            }
        } catch (\Throwable $th) {
            $this->addError('noRegister', 'Los datos son incorrectos');
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Los datos son incorrectos']);
        }
        $this->valueRegister();
        $this->emit('render');
    }


    public function forget_form()
    {
        try {
            $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
            $shfl = str_shuffle($comb);
            $pwd = substr($shfl, 0, 8);
            session()->forget('user');
            session()->forget('login');
            $validatedData = $this->validate(
                [
                    'forget_email' => 'required|email',
                    'forget_phone' => 'required',
                ],
            );
            $user =  User::where('email', trim($this->forget_email))->where('phone', trim($this->forget_phone))->first();
            if ($user) {

                $user =  User::where('email', trim($this->forget_email))->where('phone', trim($this->forget_phone))->update([
                    'password' => Hash::make($pwd),
                ]);
                Mail::to('raularellanoguevara@gmail.com')->send(new MailableForgetPsw());
                $this->dispatchBrowserEvent('success', ['message' => 'Datos enviados por email.']);
            } else {
                $this->dispatchBrowserEvent('error', ['message' => 'Los datos son incorrectos']);
            }
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', ['message' => 'Los datos son incorrectos']);
            //throw $th;
        }
        $this->valueForget();
        $this->emit('render');
    }
    function valueForget()
    {
        $this->forget_phone = null;
        $this->forget_email = null;
    }
}
