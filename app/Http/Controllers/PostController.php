<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('livres');
    }

    public function contact()
    {
        return view('contact');
    }
}
