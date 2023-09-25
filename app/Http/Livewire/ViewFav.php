<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ViewFav extends Component
{
    public $products = array();
    public function render()
    {
        $this->products = DB::table('favorites')
            ->select('products.*')
            ->leftJoin('products', 'products.product_id', 'favorites.product_id')
            ->where('favorites.user_id', session('user')->id)
            ->get();
        return view('livewire.view-fav');
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

    public function eliminar($product_id)
    {
        try {
            $user_id = session('user')->id;
            DB::table('favorites')->where('product_id', $product_id)->where('user_id', $user_id)->delete();
            $this->dispatchBrowserEvent('success', ['message' => 'Eliminado de favoritos.']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'No se realizo el proceso.']);
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
