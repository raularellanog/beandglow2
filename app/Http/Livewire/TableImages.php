<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class TableImages extends Component
{
    use WithPagination;

    public $id_image;
    public function actualizar()
    {
        $this->emit('render');
    }

    public function mount()
    {
        $this->id_image = 0;
    }
    public function render()
    {
        return view('livewire.table-images', [
            'images' => DB::table('images')->orderBy('created_at', 'DESC')->paginate(12)
        ]);
    }
    public function deleteImg()
    {
        try {
            $image = DB::table('images')->where('image_id', $this->id_image)->first();
            if ($image) {
                DB::table('images')->where('image_id', $this->id_image)->delete();
                $this->dispatchBrowserEvent('success', ['message' => 'Imagen eliminada.']);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error.']);
        }
        $this->id_image = 0;
        $this->actualizar();
    }
}
