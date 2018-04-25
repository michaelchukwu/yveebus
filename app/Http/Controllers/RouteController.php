<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Route;
use App\Bus;
use DB;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $data = Route::orderBy('id','DESC')->paginate(5);
        return view('routes.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::where('parent', 0)->get();
        $sublocations = Location::where('parent', '>', 0)->get();
        $bus = Bus::get();
        return view('routes.create',compact('locations', 'bus', 'sublocations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required|different:from',
            'time' => 'required',
            'duration' => 'required',
            'amount' => 'required',
            'bus_id' => 'required'            
        ]);


        $input = $request->all();

        $route = Route::create($input);


        return redirect()->route('routes.index')
                        ->with('success','Route created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $route = Route::find($id);
        return view('routes.show',compact('route'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $route = Route::find($id);
        $location = Location::get();
        return view('routes.edit',compact('route', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required|different:from',
            'time' => 'required',
            'duration' => 'required',
            'amount' => 'required' 
        ]);


        $input = $request->all();

        $route = Route::find($id);
        $route->update($input);



        return redirect()->route('routes.index')
                        ->with('success','Route updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Route::find($id)->delete();
        return redirect()->route('routes.index')
                        ->with('success','Route deleted successfully');
    }

    public function activate($id)
    {
        $route = Route::find($id);
        $route->update(['active'=>1]);
        return redirect()->route('routes.index')
                        ->with('success','Route Activated successfully');
    }
        public function deactivate($id)
    {
        $route = Route::find($id);
        $route->update(['active' => 0]);
        return redirect()->route('routes.index')
                        ->with('success','Route Deactivated successfully');
    }
}
