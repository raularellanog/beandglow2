<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Stopwatchs;
use Illuminate\Support\Facades\DB;

class FormStopwatch extends Component
{

    public $stopwatch_id;
    public $stopwatch_name;
    public $stopwatch_text;
    public $stopwatch_status;
    public $stopwatch_end;
    public $stopwatch_start;

    public function mount($stopwatch_id)
    {
        if ($stopwatch_id != null) {
            $stopwatch = Stopwatchs::where('stopwatch_id', $stopwatch_id)->first();
            $this->stopwatch_id = $stopwatch_id;
            $this->stopwatch_name = $stopwatch->stopwatch_name;
            $this->stopwatch_text = $stopwatch->stopwatch_text;
            $this->stopwatch_status = $stopwatch->stopwatch_status;
            $this->stopwatch_end = $stopwatch->stopwatch_end;
            $this->stopwatch_start = $stopwatch->stopwatch_start;
        } else {
            $this->stopwatch_id = null;
            $this->stopwatch_name = null;
            $this->stopwatch_text = null;
            $this->stopwatch_status = 'A';
            $this->stopwatch_end = null;
            $this->stopwatch_start = null;
        }
    }


    public function render()
    {
        return view('livewire.form-stopwatch');
    }

    public function save()
    {
        try {
            $validatedData = $this->validate([
                'stopwatch_name' => 'required',
                'stopwatch_status' => 'required',
                'stopwatch_end' => 'required',
                'stopwatch_start' => 'required',
            ]);
            if ($this->stopwatch_id != null) {
                $row = Stopwatchs::where('stopwatch_id', $this->stopwatch_id)->first();
            } else {
                $row = new Stopwatchs();
            }
            $row->stopwatch_name = trim($this->stopwatch_name);
            $row->stopwatch_text = trim($this->stopwatch_text);
            $row->stopwatch_status = trim($this->stopwatch_status);
            $row->stopwatch_end = $this->stopwatch_end;
            $row->stopwatch_end = $this->stopwatch_end;
            $row->stopwatch_start = $this->stopwatch_start;
            $row->save();
            // dd($row);
            $this->dispatchBrowserEvent('success', ['message' => 'Datos guardados']);
            if ($this->stopwatch_id == null) {
                $this->stopwatch_name = null;
                $this->stopwatch_text = null;
                $this->stopwatch_status = 'A';
                $this->stopwatch_end = null;
                $this->stopwatch_start = null;
            }
            return redirect()->to('/admin/stopwatchs');
            $this->emit('render');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', ['message' => 'Datos no guardados']);
            //throw $th;
        }
    }
}
