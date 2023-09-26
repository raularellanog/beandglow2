<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Address as modelAddress;

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

    public function mount($address_id)
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
        if ($address_id) {

            $this->valuesDB($address_id);
        }
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

    public function valuesDB($addres_id = null)
    {
        $data = modelAddress::where('address_id', $addres_id)->first();
        if ($data) {
            $this->address_name = $data->address_name;
            $this->address_street = $data->address_street;
            $this->address_noe = $data->address_noe;
            $this->address_noi = $data->address_noi;
            $this->address_cp = $data->address_cp;
            $this->address_suburb = $data->address_suburb;
            $this->address_state = $data->address_state;
            $this->address_town = $data->address_town;
            $this->address_reference = $data->address_reference;
        }
    }


    public function add_form()
    {
        try {
            $validatedData = $this->validate([
                'address_name' => 'required',
                'address_street' => 'required',
                'address_cp' => 'required',
                'address_suburb' => 'required',
                'address_state' => 'required',
                'address_town' => 'required',
            ]);
            modelAddress::where('user_id', $this->user_id)->delete();
            $data = DB::table('address')->insert([
                'address_name' =>  $this->address_name,
                'address_street' => $this->address_street,
                'address_noe' => $this->address_noe,
                'address_noi' => $this->address_noi,
                'address_cp' =>  $this->address_cp,
                'address_suburb' => $this->address_suburb,
                'address_state' =>  $this->address_state,
                'address_town' => $this->address_town,
                'address_reference' => $this->address_reference,
                'user_id' => $this->user_id
            ]);
            $this->dispatchBrowserEvent('success', ['message' => 'Dirección  agregada.']);
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', ['message' => 'No se pudo actualizar los datos.']);
            //throw $th;
        }
        $this->updateDirec();
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.address');
    }
    public function updateDirec()
    {
        $data = modelAddress::where('user_id', $this->user_id)->first();
        if ($data) {
            session(['address_id' => $data->address_id]);
            $this->valuesDB(session('address_id'));
        }
    }
}
