<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News;
use Illuminate\Support\Str;

class FormNews extends Component
{

    public $new_id;
    public $title;
    public $main_image;
    public $html;
    public $message;
    public $key_words;
    public $new_date;

    public function mount($new_id = 0)
    {
        $this->new_id = $new_id;
        if ($this->new_id == 0) {
            $this->resetear();
        } else {
            $row = News::where('new_id', $this->new_id)->first();
            $this->title = $row->new_title;
            $this->key_words = $row->new_keywords;
            $this->main_image = $row->new_image;
            $this->message = $row->new_text;
            $this->new_date = $row->new_date;
        }
    }

    public function render()
    {
        return view('livewire.form-news');
    }

    public function save()
    {
        try {
            if ($this->new_id <= 0) {
                $row = new News();
            } else {
                $row = News::where('new_id', $this->new_id)->first();
            }
            $row->new_title = trim($this->title);
            $row->new_keywords = Str::slug(trim($this->key_words), ',');
            $row->new_image = trim($this->main_image);
            $row->new_text = trim($this->message);
            $row->new_date = $this->new_date;
            $row->updated_at = date('Y-m-d H:i:s');
            $row->save();
            // dd($row);
            $this->new_id = $row->new_id;

            $this->dispatchBrowserEvent('success', ['message' => 'Datos guardados']);
            return redirect()->to('/admin/news');
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent('error', ['message' => 'Datos no guardados']);
            //throw $th;
        }
        $this->emit('render');
    }


    public function resetear()
    {
        $this->title = '';
        $this->main_image = '';
        $this->key_words = '';
        $this->new_date = '';
        $this->message = '';
    }
}
