<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        return view('index', ['news' => News::paginate(5)]);
    }
}
