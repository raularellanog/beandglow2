<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Usuarios';
        array_push($result['breadcrumb'], ['module' => 'Usuarios', 'url' => '/admin/user']);

        return view('admin.users.index')->with('result', $result);
    }
    public function user_edit($user_id)
    {
        $result = array();
        $result['breadcrumb'] = array();
        $result['title'] = 'Editar Usuario';
        array_push($result['breadcrumb'], ['module' => 'Usuarios', 'url' => '/admin/user']);
        array_push($result['breadcrumb'], ['module' => 'Editar Usuario', 'url' => '#']);
        $id = base64_decode($user_id);
        return view('admin.users.edit', ['id' => $id])->with('result', $result);
    }
}
