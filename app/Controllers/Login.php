<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Menu Login'
        ];
        return view('login/login', $data);
    }
}