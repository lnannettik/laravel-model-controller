<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Homepage

    public function index() {

        //dati
        $skills = ['HTML', 'CSS', 'JS', 'PHP'];
        $clients = ['Pietro', 'Marco', 'Matteo'];

        // return view('home', [
        //     'skills' => $skills,
        //     'clients' => $clients, 
        // ]);

        return view('home', compact('skills', 'clients'));

        //
    }
}
