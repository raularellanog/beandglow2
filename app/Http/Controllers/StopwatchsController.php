<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StopwatchsController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Cronómetro de ofertas';
        array_push($result['breadcrumb'], ['module' => 'Cronómetro de ofertas', 'url' => '/admin/stopwatchs']);

        return view('admin.stopwatch.index')->with('result', $result);
    }

    public function add()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Agregar cronómetro de ofertas';
        array_push($result['breadcrumb'], ['module' => 'Cronómetro de ofertas', 'url' => '/admin/stopwatchs']);
        array_push($result['breadcrumb'], ['module' => 'Agregar cronómetro de ofertas', 'url' => '/admin/stopwatchs/add']);
        return view('admin.stopwatch.add')->with('result', $result);
    }
    public function edit($id)
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Editar cronómetro de ofertas';
        array_push($result['breadcrumb'], ['module' => 'Cronómetro de ofertas', 'url' => '/admin/stopwatchs']);
        array_push($result['breadcrumb'], ['module' => 'Editar cronómetro de ofertas', 'url' => '#']);
        return view('admin.stopwatch.edit')->with('id', $id)->with('result', $result);
    }
}
