<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ProductDetails extends Component
{
    public $product_id;
    public function mount($product_id = 0)
    {
        $this->product_id = $product_id;
    }
    public function render()
    {
        $product = DB::table('products')->where('product_id', $this->product_id)->first();

        $image = DB::table('images_products')->where('product_id', $this->product_id)->orderBy('image_product_id', 'DESC')->get();

        return view('livewire.product-details')->with('product', $product)->with('image', $image);
    }

    public function addCart($product_id)
    {
        try {
            $user_id = session('user')->id;
            $card = DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->first();
            if ($card) {
                DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->increment('quantity');
            } else {
                DB::table('carts')->insert([
                    'product_id' => $product_id,
                    'user_id' => $user_id,
                    'quantity' => 1
                ]);
            }
            $this->dispatchBrowserEvent('success', ['message' => 'Agregado al carrito.']);
            $this->validate_stock($product_id, $user_id);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'No agregado al carrito.']);
        }
        $this->dispatchBrowserEvent('updateCart', ['message' => 'actualizar carrito.']);
    }
    public function addFav($product_id)
    {
        try {
            $user_id = session('user')->id;
            $favorite = DB::table('favorites')->where('product_id', $product_id)->where('user_id', $user_id)->first();
            if (!$favorite) {
                DB::table('favorites')->insert([
                    'product_id' => $product_id,
                    'user_id' => $user_id
                ]);
            }
            $this->dispatchBrowserEvent('success', ['message' => 'Agregado a favorites.']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'No agregado a favorito.']);
        }
        $this->dispatchBrowserEvent('updateFav', ['message' => '']);
    }


    function validate_stock($product_id, $user_id)
    {
        try {
            $cart = DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->first();
            $product = DB::table('products')->where('product_id', $product_id)->first();
            if ($cart && (int)$cart->quantity > (int) $product->product_stock) {
                DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->update([
                    'quantity' => (int) $product->product_stock
                ]);
                $this->dispatchBrowserEvent('info', ['message' => 'Máximo stock disponible']);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
