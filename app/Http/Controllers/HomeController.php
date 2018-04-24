<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Role;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::get();
        return view('home', compact('location'));
    }
}
