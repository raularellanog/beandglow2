<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products;
use Illuminate\Support\Str;
use  App\Models\Categories;

class AddProducts extends Component
{
    public $product_id;
    public $name;
    public $slug;
    public $sku;
    public $description;
    public $price;
    public $price2;
    public $category_id;
    public $subcategory_id;
    public $stock;
    public $type;
    public $key_word;

    public function mount($product_id = 0)
    {
        $this->product_id = 0;
        $this->product_id = $product_id;
        if ($this->product_id > 0) {
            $row = Products::where('product_id', $this->product_id)->first();
            $this->name = $row->product_name;
            $this->description = $row->product_description;
            $this->key_word = $row->product_keyword;
            $this->sku = $row->product_sku;
            $this->stock = $row->product_stock;
            $this->price = $row->product_price;
            $this->price2 = $row->product_price2;
            $this->type = $row->product_type;
            $this->category_id = $row->category_id;
            $this->subcategory_id = $row->subcategory_id;
        } else {
            $this->reiniciar();
        }
    }
    public function render()
    {

        $categories = Categories::where('type_category', 0)->where('type_product', $this->type == 1 ? 0 : 1)->get();
        $subCategories = Categories::where('type_category', 1)->where('type_product', $this->type == 1 ? 0 : 1)->where('category_main', $this->category_id)->get();
        return view('livewire.add-products', [
            'categories' => $categories,
            'subcategories' => $subCategories
        ]);
    }
    public function save()
    {
        if ($this->product_id > 0) {
            $row = Products::where('product_id', $this->product_id)->first();
        } else {
            $row = new Products();
        }
        $row->product_name = trim($this->name);
        $row->product_name_slug = $this->slugText($this->name);
        $row->product_description = trim($this->description);
        $row->product_keyword = trim($this->key_word);
        $row->product_keyword_slug = $this->slugText($this->key_word);
        $row->product_sku = trim($this->sku);
        $row->product_stock = (int)$this->stock;
        $row->product_price = (float)$this->price;
        $row->product_price2 = (float)$this->price2;
        $row->product_type = (int)$this->type;
        $row->category_id = (int)$this->category_id;
        $row->subcategory_id = (int)$this->subcategory_id;
        $row->save();
        $this->dispatchBrowserEvent('success', ['message' => 'Producto guardado']);

        if ($this->product_id <= 0) {
            $this->reiniciar();
            return redirect()->to('/admin/products/edit/' . $row->product_id);
        }
        $this->emit('render');
    }
    public function  slugText($text)
    {
        return Str::slug(str_replace([',', '-', '_', '/', '.'], " ", trim($text)), ' ');
    }

    public function updatedSku()
    {
        $this->sku = str_replace([',', '-', '_', '/', '.', ' '], "", trim($this->sku));
    }
    public function reiniciar()
    {
        $this->name = "";
        $this->slug = "";
        $this->sku = "";
        $this->description = "";
        $this->price = 0;
        $this->price2 = 0;
        $this->category_id = 0;
        $this->subcategory_id = 0;
        $this->stock = 0;
        $this->type = 1;
        $this->key_word = "";
    }
}
