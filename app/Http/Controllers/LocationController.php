<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $locations = Location::orderBy('id','DESC')->paginate(5);
        return view('locations.index',compact('locations'))
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
        return view('locations.create', compact('locations'));
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
            'name' => 'required',
            'code' => 'required|unique:locations,code',
        ]);


        $location = new Location();
        $location->name = $request->input('name');
        $location->code = $request->input('code');
        $location->place_id = $request->input('place_id');
        if($request->input('parent') == NULL){
            $location->parent = 0;
        }else
        {
             $location->parent = $request->input('parent');
        }
        $location->save();


        return redirect()->route('locations.index')
                        ->with('success','Location created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::find($id);
        return view('locations.show',compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $location = Location::find($id);
        return view('locations.edit',compact('location'));
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
            'name' => 'required',
            'code' => 'required',
        ]);


        $location = Location::find($id);
        $location->name = $request->input('name');
        $location->code = $request->input('code');
        $location->save();





        return redirect()->route('locations.index')
                        ->with('success','Location updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("locations")->where('id',$id)->delete();
        return redirect()->route('locations.index')
                        ->with('success','Location deleted successfully');
    }
}
