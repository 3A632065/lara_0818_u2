<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //	對應到的	view 在
        //	resources/views/home/index.php
        return view('home.index');
    }
}
