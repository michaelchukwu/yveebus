<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Role;
use Auth;
use DB;
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
        $location = Location::pluck('name');
        $from = DB::table('routes')
            ->where('active', 1)
            ->join('locations', 'routes.from', '=', 'locations.id')
            ->pluck('locations.name');
        $to = DB::table('routes')
            ->where('active', 1)
            ->join('locations', 'routes.to', '=', 'locations.id')
            ->pluck('locations.name');
        $location = json_encode($location);
        $from = json_encode($from);
        $to = json_encode($to);
        return view('home', compact('location', 'from', 'to'));
    }

}
