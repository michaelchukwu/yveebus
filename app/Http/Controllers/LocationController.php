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

        $geometry = explode(',', rtrim(substr($request->input('geometry'),1),')'));
        // dd(floatval($geometry[0]));
        $location = new Location();
        $location->name = $request->input('name');
        $location->code = $request->input('code');
        $location->place_id = $request->input('place_id');
        $location->lat = floatval($geometry[1]);
        $location->lng = floatval($geometry[0]);
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
    /**
     * Gets the sublocations)(bus stops)
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function sublocation(Request $request)
    {
                // validating the entries
                //add different:from to code.
        try {
            $this->validate($request, [
                'from' => 'required',
                'to' => 'required'
            ]);

            $input = $request->all();
                // dd($input['from']);
            $from = Location::select('id')->where('name', $input['from'])->first();
            $to = Location::select('id')->where('name', $input['to'])->first();
            $from = Location::where('parent',$from->id)->get();
            $to = Location::where('parent', $to->id)->get();
            // return response()->json(array('routes'=>$routes), 200);
            $location_from = $input['from'];
            $location_to = $input['to'];
            return view('locations.sublocations', compact('from', 'to', 'location_from', 'location_to'));
        }
        catch (\Exception $e) {
            return redirect()->back()->with('error', 'No Route');
        }
    }
}
