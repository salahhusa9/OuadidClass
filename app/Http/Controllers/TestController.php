<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hi()
    {
        return 'hi abdl2ilah';
    }

    public function hiview()
    {
        return view('welcome');
    }

    public function hello($name)
    {
        return 'hello ' . $name ;
    }

    public function salam($name)
    {
        return view('welcome',['semya' => $name]);
    }
}
