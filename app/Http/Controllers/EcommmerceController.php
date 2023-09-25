<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EcommmerceController extends Controller
{
    public function index()
    {
        $result['breadcrumb'] = array();
        $result['title'] = 'Productos y servicios';
        array_push($result['breadcrumb'], ['module' => 'Productos', 'url' => '/shop']);

        return view('ecommerce.index')->with('result', $result);
    }

    public function details_product($slug)
    {
        $product = DB::table('products')->where('product_name_slug', trim($slug))->first();
        if ($product) {
            $result['breadcrumb'] = array();
            $result['title'] = 'Detalles de Producto';
            array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/shop']);
            array_push($result['breadcrumb'], ['module' => $product->product_name, 'url' => '/shop/' . $product->product_name_slug]);
            return view('ecommerce.details')->with('product', $product)->with('result', $result);
        }
    }

    public function shop_cart(Request $request)
    {
        $result['breadcrumb'] = array();
        $result['title'] = 'Detalles de Producto';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/shop']);
        array_push($result['breadcrumb'], ['module' => 'Carrito de compra', 'url' => '/shop/cart']);
        return view('ecommerce.cart')->with('result', $result);
    }

    public function shop_favorites()
    {
        $result['breadcrumb'] = array();
        $result['title'] = 'Detalles de Producto';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/shop']);
        array_push($result['breadcrumb'], ['module' => 'Productos Favoritos', 'url' => '/shop/favorites']);
        return view('ecommerce.favorites')->with('result', $result);
    }
    public function shop_profile()
    {
        $result['breadcrumb'] = array();
        $result['title'] = 'Detalles del usuario';
        array_push($result['breadcrumb'], ['module' => 'Productos y servicios', 'url' => '/shop']);
        array_push($result['breadcrumb'], ['module' => 'Carrito de compra', 'url' => '/shop/cart']);
        array_push($result['breadcrumb'], ['module' => 'Detalles usuario', 'url' => '/shop/profile']);
        return view('ecommerce.profile')->with('result', $result);
    }
}
