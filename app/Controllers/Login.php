<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'RD&RZ | Login'
        ];
        return view('login/login', $data);
    }

    public function lupa_password()
    {
        $data = [
            'title' => 'RD&RZ | Lupa Password'
        ];
        return view('login/lupa_password', $data);
    }
}
