<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $promos = Promo::orderBy('id','DESC')->paginate(5);
        return view('promos.index',compact('promos'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promos.create');
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
            'code' => 'required|unique:promos,code',
            'amount' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);


        $promo = new Promo();
        $promo->code = $request->input('code');
        $promo->amount = $request->input('amount');
        $promo->type = $request->input('type');
        $promo->description = $request->input('description');
        $promo->save();



        return redirect()->route('promos.index')
                        ->with('success','Promo created successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promo = Promo::find($id);

        return view('promos.show',compact('promo'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promo = Promo::find($id);

        return view('promos.edit',compact('promo'));
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
            'amount' => 'required',
            'type' => 'required',
            'description' => 'required'
        ]);


        $promo = Promo::find($id);
        $promo->amount = $request->input('amount');
        $promo->type = $request->input('type');
        $promo->description = $request->input('description');
        $promo->save();


        return redirect()->route('promos.index')
                        ->with('success','Promo updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("promos")->where('id',$id)->delete();
        return redirect()->route('promos.index')
                        ->with('success','Promo deleted successfully');
    }
    
    public function promo_use()
    {

    }
}