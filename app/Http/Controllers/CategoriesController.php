<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Categorías y subcategorías';
        array_push($result['breadcrumb'], ['module' => 'Categorías y subcategorías', 'url' => '/admin/categories']);
        return view('admin.categories.index')->with('result', $result);
    }

    public function add()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar categoría o subcategoría';
        array_push($result['breadcrumb'], ['module' => 'Categorías y subcategorías', 'url' => '/admin/categories']);
        array_push($result['breadcrumb'], ['module' => 'Agregar categoría o subcategoría', 'url' => '/admin/add']);
        return view('admin.categories.add')->with('result', $result);
    }
    public function edit($id)
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar categoría y subcategoría';
        array_push($result['breadcrumb'], ['module' => 'Categorías y subcategorías', 'url' => '/admin/categories']);
        array_push($result['breadcrumb'], ['module' => 'Editar categoría o subcategoría', 'url' => '#']);
        return view('admin.categories.edit')->with('id', $id)->with('result', $result);
    }
}
