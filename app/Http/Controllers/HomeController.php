<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * home
     *
     * @return void
     */
    public function home()
    {
        return view('home');
    }
}
