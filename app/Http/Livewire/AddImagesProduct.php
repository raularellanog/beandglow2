<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\ImagesProducts;

class AddImagesProduct extends Component
{
    public $name;
    public $product_id;
    public $product;
    public $max;
    public $url;
    public $orden;

    ///
    public $update_id;
    public $update_url;
    public $update_order;

    //
    public $number_delete;

    public function mount($product_id)
    {
        $this->number_delete = 0;
        $this->resetear();
        $this->max = 5;
        $this->product_id = $product_id;
    }
    public function render()
    {
        return view('livewire.add-images-product', [
            'data' => DB::table('products')->where('product_id', $this->product_id)->first(),
            'images' => DB::table('images_products')->where('product_id', $this->product_id)->orderBy('image_product_order', 'ASC')->get()
        ]);
    }

    public function saveImg()
    {
        try {
            $validatedData = $this->validate([
                'url' => 'required',
                'orden' => 'required'
            ]);
            $count = ImagesProducts::where('product_id', $this->product_id)->count();
            if ($count < 5) {
                $exist = ImagesProducts::where('image_product_url', trim($this->url))->where('product_id', $this->product_id)->first();
                if (!$exist) {
                    $row = new ImagesProducts();
                    $row->image_product_url = trim($this->url);
                    $row->image_product_order = (int)$this->orden;
                    $row->product_id = (int)$this->product_id;
                    $row->save();
                    $this->dispatchBrowserEvent('success', ['message' => 'Imagen Guardada.']);
                } else {
                    $this->dispatchBrowserEvent('error', ['message' => 'Imagen anteriormente guardada.']);
                }
            } else {
                $this->dispatchBrowserEvent('error', ['message' => 'Imagene al limite permitido.']);
            }
            $this->reorder();
            $this->resetear();
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error.']);
        }
    }
    public function actualizar()
    {
        $this->reorder();
        $this->emit('render');
    }
    public function resetear()
    {
        $this->orden = 1;
        $this->url = null;
        $this->update_id = 0;
        $this->update_url = null;
        $this->update_order = 1;
        $this->actualizar();
    }

    public function reorder()
    {
        try {
            $images = ImagesProducts::where('product_id', $this->product_id)->orderBy('image_product_order', 'ASC')->orderBy('created_at', 'ASC')->get();
            foreach ($images as $key => $value) {
                $row = ImagesProducts::where('image_product_id', $value->image_product_id)->first();
                $row->image_product_order = ($key + 1);
                $row->save();
            }
            ImagesProducts::where('product_id', $this->product_id)->where('image_product_order', '>', $this->max)->delete();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function editar($number)
    {
        try {
            $images = ImagesProducts::where('product_id', $this->product_id)->where('image_product_order', $number)->first();
            if ($images) {
                $this->update_id = $images->image_product_id;
                $this->update_url = $images->image_product_url;
                $this->update_order = $images->image_product_order;
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function saveEdit()
    {
        try {
            $row = ImagesProducts::where('image_product_id', $this->update_id)->first();
            $row->image_product_order = $this->update_order;
            $row->image_product_url = $this->update_url;
            $row->save();
            $this->reorder();
            $this->resetear();
            $this->dispatchBrowserEvent('success', ['message' => 'Imagen editada.']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error.']);
        }
    }
    public function deleteImg()
    {
        try {
            $image = ImagesProducts::where('product_id', $this->product_id)->where('image_product_order', $this->number_delete)->first();
            if ($image) {
                ImagesProducts::where('product_id', $this->product_id)->where('image_product_order', $this->number_delete)->delete();
                $this->dispatchBrowserEvent('success', ['message' => 'Imagen eliminada.']);
            }
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error.']);
        }
        $this->number_delete = 0;
        $this->reorder();
        $this->actualizar();
    }
}
