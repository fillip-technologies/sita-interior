<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function homePage()
    {
        return view('welcome');
    }
    // servies
    public function services()
    {
        return view('pages.services');
    }

    // projects
    public function projects()
    {
        return view('pages.projects');
    }
    // about
    public function about()
    {
        return view('pages.about');
    }
}
