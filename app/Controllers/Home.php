<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('profile_card');
        // return view('first');
    }
}
