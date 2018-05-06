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
            ->groupBy('name')
            ->join('locations', 'routes.from', '=', 'locations.id')
            ->pluck('locations.name');
        
        $location = json_encode($location);
        $from = json_encode($from);
        return view('home', compact('location', 'from'));
    }
    public function get_destination(Request $request)
    {
        $from_location = $request->input('get_option') ?? $from_location = "Jabi";
        
        $to = DB::table('locations')
            ->where('name', $from_location)
            ->first();
        $to = DB::table('routes')
            ->where('routes.from', $to->id)
            ->pluck('to');
        $st = DB::table('routes')
            ->where('active', 1)
            ->whereIn('routes.to', $to)
            ->groupBy('name')
            ->join('locations', 'routes.to', '=', 'locations.id')
            ->pluck('locations.name');
            
        return response()->json($st,200);
        
    }
}