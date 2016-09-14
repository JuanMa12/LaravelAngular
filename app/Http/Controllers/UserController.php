<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;


class UserController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return User::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }
    public function store(Request $request) {
        $product = new User();
        $product->name = $request->input('name');
        $product->email = $request->input('email');
        $product->save();

        return response($product , 201);
    }
    public function show($id) {
        return User::find($id);
    }
}