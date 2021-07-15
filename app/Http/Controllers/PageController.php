<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('profile');
    }

    public function return_policy()
    {
        return view('return-policy');
    }
    public function terms()
    {
        return view('terms-conditions');
    }
    public function privacy()
    {
        return view('privacy-policy');
    }

}
