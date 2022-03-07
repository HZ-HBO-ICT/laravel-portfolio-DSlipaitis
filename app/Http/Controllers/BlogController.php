<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BlogController extends Controller
{
    /**
     * Function to load the Blog page.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show()
    {
        //$articles = Article::latest()->take(3)->get();

        return view('blog', [
            'articles' => $articles
        ]);
    }
}
