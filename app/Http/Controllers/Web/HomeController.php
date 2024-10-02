<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('Web.home.index');
    }
    public function privacy_policy(){
        return view('Web.privacy.index');
    }
    public function contact_us(){
        return view('Web.contact.index');

    }
    public function about_us(){
        return view('Web.about.index');
    }

    public function landing(){
        return view('landing.index');
    }


}
