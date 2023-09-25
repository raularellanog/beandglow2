<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function dashboard()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar noticias';
        return view('admin.index.dashboard')->with('result', $result);
    }
}
