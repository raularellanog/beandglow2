<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ViewCart extends Component
{

    public $products = array();

    public $mount;


    public $sub;
    public $total;
    public $ship;


    public function mount()
    {
        $this->resetear();
    }
    public function resetear()
    {
        $this->sub = 0;
        $this->total = 0;
        $this->ship = 0;
        $this->mount = 0;
    }

    public function render()
    {
        $user_id = session('user')->id;
        $this->resetear();
        $this->products = DB::table('carts')
            ->select('products.*', 'carts.quantity')
            ->leftJoin('products', 'products.product_id', 'carts.product_id')
            ->where('carts.user_id', session('user')->id)
            ->where('carts.is_order', 0)
            ->orderBy('carts.cart_id', 'DESC')
            ->get();

        foreach ($this->products as $item) {
            $this->validate_stock($item->product_id, $user_id);
            $this->sub += ($item->product_price * $item->quantity);
        }
        $this->total = $this->sub + $this->ship;
        return view('livewire.view-cart');
    }

    public function reducir($product_id)
    {
        try {
            $user_id = session('user')->id;
            DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->decrement('quantity');
            $card = DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->first();
            if ($card) {
                if ($card->quantity <= 0) {
                    DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->delete();
                }
            }
            $this->validate_stock($product_id, $user_id);
            $this->dispatchBrowserEvent('success', ['message' => 'Actualizado']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Proceso no realizado']);
        }
        $this->dispatchBrowserEvent('updateCart', ['message' => 'actualizar carrito.']);
        $this->emit('render');
    }
    public function incrementar($product_id)
    {
        try {
            $user_id = session('user')->id;
            DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->increment('quantity');
            $this->dispatchBrowserEvent('success', ['message' => 'Actualizado']);
            $this->validate_stock($product_id, $user_id);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Proceso no realizado']);
        }
        $this->dispatchBrowserEvent('updateCart', ['message' => 'actualizar carrito.']);
        $this->emit('render');
    }
    public function eliminar($product_id)
    {
        try {
            $user_id = session('user')->id;
            $card = DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->first();
            if ($card) {
                DB::table('carts')->where('product_id', $product_id)->where('user_id', $user_id)->where('is_order', 0)->delete();
            }


            $this->dispatchBrowserEvent('success', ['message' => 'Eliminado']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Proceso no realizado']);
        }
        $this->dispatchBrowserEvent('updateCart', ['message' => 'actualizar carrito.']);
        $this->emit('render');
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
