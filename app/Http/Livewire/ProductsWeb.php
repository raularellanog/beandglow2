<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use App\Models\Categories;

class ProductsWeb extends Component
{

    public $data = array();
    public $categories = array();

    public function mount($type = null)
    {

        $data = Products::select('products.*', 'categories.category_slug')
            ->where('product_type', 1)
            ->leftJoin('categories', 'categories.category_id', '=', 'products.category_id')
            ->get();
        if ($data) {
            $this->data = $data;
        }
        $this->categories = Categories::where('type_product', 0)->where('type_category', 0)->get();
    }

    public function render()
    {
        return view('livewire.products-web');
    }
}
