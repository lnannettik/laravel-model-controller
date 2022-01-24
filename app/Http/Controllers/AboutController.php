<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //About page

    public function index() {
        return view('about');
    }
}
