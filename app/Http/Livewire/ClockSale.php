<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class ClockSale extends Component
{
    public $type = 'block';

    public function mount()
    {
        $value = Cookie::get('stopwatch');
        if ($value == "true") {
            $this->type = "hidden";
        }
    }

    public function render()
    {
        $stopwatch = false;
        $date = date('Y-m-d H:i:s');
        $stopwatch = DB::table('stopwatchs')
            ->where('stopwatch_status', 'A')
            ->where('stopwatch_start', '<', $date)
            ->where('stopwatch_end', '>', $date)
            ->first();
        if (!$stopwatch) {
            $this->type = "hidden";
        }

        return view('livewire.clock-sale')->with('stopwatch', $stopwatch);
    }

    public function ocultarStopwatch()
    {
        $this->type = "hidden";
        Cookie::queue(Cookie::make('stopwatch', 'true', 30));
    }
}
