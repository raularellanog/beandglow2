<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Ordenes';
        array_push($result['breadcrumb'], ['module' => 'Ordenes', 'url' => '/admin/orders']);
        return view('admin.orders.index')->with('result', $result);
    }
}
