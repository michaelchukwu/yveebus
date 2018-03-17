<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Location;
use DB;
class BusController extends Controller
{
    public function searchBus(Request $request){

        // validating the entries
        // $this->validate($request, [
        //     'from' => 'required',
        //     'to' => 'required|different:from'
        // ]);

        $input = $request->all();
            // dd($input['from']);
        $data = DB::table('routes')
        ->where('from', $input['from'])
        ->where('to', $input['to'])
        ->where('active', 1)
        ->get();
        $location = Location::get();
        

        // return response()->json(array('routes'=>$routes), 200);
        return view('buses.search', compact('data', 'location'));
    }
}
