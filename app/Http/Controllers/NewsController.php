<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Noticias';
        array_push($result['breadcrumb'], ['module' => 'Noticias', 'url' => '/admin/news']);
        return view('admin.news.index')->with('result', $result);
    }
    public function add()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar noticias';
        array_push($result['breadcrumb'], ['module' => 'Noticias', 'url' => '/admin/news']);
        array_push($result['breadcrumb'], ['module' => 'Agregar noticias', 'url' => '/admin/news/add']);
        return view('admin.news.add')->with('result', $result);
    }
    public function edit($id)
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar noticias';
        array_push($result['breadcrumb'], ['module' => 'Noticias', 'url' => '/admin/news']);
        array_push($result['breadcrumb'], ['module' => 'Agregar noticias', 'url' => '#']);
        return view('admin.news.edit')->with('id', $id)->with('result', $result);
    }
}
