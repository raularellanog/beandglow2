<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class CardFav extends Component
{
    /**
     * Create a new component instance.
     */
    public $product;
    public $name;
    public $price;
    public $image;
    public $priceNo;
    public $clase;
    public $slug;
    public $quantity;
    public function __construct($product = 0, $price = 0, $name = null, $priceNo = 0, $slug = null, $clase = null, $quantity = 0)
    {
        $image = null;
        $this->image = asset('img/sin_imagen.jpg');
        $this->product = $product;
        $this->price = $price;
        $this->name = $name;
        $this->priceNo = $priceNo;
        $this->slug = $slug;
        $this->quantity = $quantity;
        $this->clase=$clase;

        $image = DB::table('images_products')->where('product_id', $this->product)->where('image_product_order', 1)->first();
        if ($image == null) {
            $image = DB::table('images_products')->where('product_id', $this->product)->orderBy('image_product_id', 'DESC')->first();
        }
        if ($image != null) {
            $this->image = $image->image_product_url;
        }
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card-fav');
    }
}
