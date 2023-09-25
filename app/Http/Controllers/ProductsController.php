<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Productos y servicios';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/admin/products']);
        return view('admin.products.index')->with('result', $result);
    }
    public function add()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar producto o servicio';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/admin/products']);
        array_push($result['breadcrumb'], ['module' => 'Agregar producto o servicio', 'url' => '/admin/products/add']);
        return view('admin.products.add')->with('result', $result);
    }
    public function edit($id)
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Editar producto o servicio';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/admin/products']);
        array_push($result['breadcrumb'], ['module' => 'Editar producto o servicio', 'url' => '#']);
        return view('admin.products.edit')->with('id', $id)->with('result', $result);
    }
}
