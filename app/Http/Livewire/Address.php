<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Address extends Component
{
    public $user_id;
    public $name;
    public $email;
    public $phone;

    public $address_name;
    public $address_street;
    public $address_noe;
    public $address_noi;
    public $address_cp;
    public $address_suburb;
    public $address_state;
    public $address_town;
    public $address_reference;
    public $address_number;
    public $address_status;

    public function mount()
    {
        $user_id = session('user')->id;
        $this->user_id = $user_id;
        $data = DB::table('users')->where('id', $user_id)->first();
        $this->name = $data->name;
        $this->email = $data->email;
        $this->phone = $data->phone;
        $this->address_number = 1;
        $this->address_status = 'A';

        $this->resetValues();
    }

    public function resetValues()
    {
        $this->address_name = null;
        $this->address_street = null;
        $this->address_noe = null;
        $this->address_noi = null;
        $this->address_cp = null;
        $this->address_suburb = null;
        $this->address_state = null;
        $this->address_town = null;
        $this->address_reference = null;
    }


    public function add_form()
    {
        try {
            $validatedData = $this->validate(
                [
                    'address_name' => 'required',
                    'address_street' => 'required',
                    'address_cp' => 'required',
                    'address_suburb' => 'required',
                    'address_state' => 'required',
                    'address_town' => 'required',
                ],
            );

            
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function render()
    {
        return view('livewire.address');
    }
}
