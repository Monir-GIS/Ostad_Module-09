<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function aboutMe(){
        return view('pages.aboutMe');

    }

}
