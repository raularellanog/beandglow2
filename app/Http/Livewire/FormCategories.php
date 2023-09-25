<?php

namespace App\Http\Livewire;

use Livewire\Component;
use  App\Models\Categories;
use Illuminate\Support\Str;

class FormCategories extends Component
{
    public $type_product;
    public $category_name;
    public $category_id;
    public $main_category;
    public $type_category;

    public $categories;
    public $count_categories;

    public function mount($category_id = 0)
    {
        $this->resetear();
        if ($category_id > 0) {
            $row = Categories::where('category_id', $category_id)->first();

            if ($row) {
                $this->category_name = $row->category_name;
                $this->category_id = $row->category_id;
                $this->type_product = $row->type_product;
                $this->type_category = $row->type_category;
                $this->main_category = $row->category_main;
            }
        }
    }
    public function render()
    {
        $this->count_categories = Categories::where('type_category', 0)->count();
        if ($this->type_category == 1) {
            $this->categories = Categories::where('type_category', 0)->get();
        } else {
            $this->categories = null;
            $this->main_category = null;
        }
        return view('livewire.form-categories');
    }

    public function save()
    {
        try {
            $validatedData = $this->validate([
                'type_product' => 'required',
                'type_category' => 'required',
                'category_name' => 'required',
            ]);
            if ($this->category_id > 0) {
                $row = Categories::where('category_id', $this->category_id)->first();
            } else {
                $row = new Categories();
            }
            $row->category_name = trim($this->category_name);
            $row->category_slug = $this->slug($this->category_name);
            $row->type_product = $this->type_product;
            $row->type_category = $this->type_category;
            $row->category_main = $this->main_category;
            $row->save();
            if ($this->category_id > 0) {
                $this->category_id = $row->category_id;
            } else {
                $this->resetear();
            }
            $this->dispatchBrowserEvent('success', ['message' => 'Datos guardados.']);
        } catch (\Throwable $th) {
            //throw $th;
            $this->dispatchBrowserEvent('error', ['message' => 'Error.']);
        }
    }
    public function resetear()
    {
        $this->category_id = 0;
        $this->count_categories = 0;
        $this->main_category;
        $this->categories = null;
        $this->type_product = 0;
        $this->type_category = null;
        $this->category_name = null;
    }
    public function  slug($text)
    {
        return Str::slug(str_replace([',', '-', '_', '/', '.'], " ", trim($text)), '_');
    }
}
