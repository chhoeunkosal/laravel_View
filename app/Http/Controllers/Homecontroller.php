<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return View("home.index");
    }
    public function About()
    {
        return View("home.About");
    }
}
