<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    public function show()
    {
        return view('my-study-choice');
    }
}
