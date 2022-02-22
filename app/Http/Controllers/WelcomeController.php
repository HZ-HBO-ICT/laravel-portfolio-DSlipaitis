<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Function to load Index page.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(){
        return view('welcome');
    }
}
