<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function login()
    {
        return view('pages.login');
    }
    function contact()
    {
    	return view('pages.contact');
    }
    function about()
    {
    	return view('pages.about');
    }
    function index()
    {
    	return view('pages.welcome');
    }
    

}
