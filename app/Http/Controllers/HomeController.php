<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function login(){
        $data = $this->request->all();
        $credentials = ['email' => $data['email'], 'password' => $data['password']];
        dd($credentials);
    }

    public function register(){

    }
}
