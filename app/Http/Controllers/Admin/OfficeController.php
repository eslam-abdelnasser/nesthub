<?php

namespace App\Http\Controllers\Admin;

use App\Models\Building;
use App\Models\Office;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $building = Building::find( ((int)$request->get('building')));
        return view('admin.officies.create')->with('building',$building);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $building_id)
    {
        //
        $this->validate($request,array(
           'desk_number' => 'required',
           'Area' => 'required',
            'min_rental_per_month' => 'required',
            'max_rental_per_month' => 'required',
            'price' => 'required',
            'feature' => 'required'
        ));

        $office = new Office;
        $office->desk_number = $request->desk_number;
        $office->office_type = $request->office_type;
        $office->publish_archive = 1;
        $office->min_rental_per_month = $request->min_rental_per_month;
        $office->max_rental_per_month = $request->max_rental_per_month;
        $office->Area = $request->Area;
        $office->price = $request->price;
        $office->feature = $request->feature;
        //$office->associate($building);
        $office->building_id = $building_id;

        $office->save();
        Session::flash('success',' Office Added Successfully !!');
        return redirect()->route('building.show', $building_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $building = Building::find($id);
        return view('admin.officies.index')->with('building',$building);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $office = Office::find($id);
        return view('admin.officies.edit')->with('office',$office);
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
        $this->validate($request,array(
            'desk_number' => 'required',
            'Area' => 'required',
            'min_rental_per_month' => 'required',
            'max_rental_per_month' => 'required',
            'price' => 'required',
            'feature' => 'required'
        ));

        $office = Office::find($id);
        $office->desk_number = $request->input('desk_number');
        $office->office_type = $request->input('office_type');
        $office->publish_archive = 1;
        $office->min_rental_per_month = $request->input('min_rental_per_month');
        $office->max_rental_per_month = $request->input('max_rental_per_month');
        $office->Area = $request->input('Area');
        $office->price = $request->input('price');//$office->associate($building);
        $office->feature = $request->feature;
        $building_id = $office->building_id;
        $office->save();
        Session::flash('success',' Office Added Successfully !!');
        return redirect()->route('building.show', $building_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $office = Office::find($id);
        $id= $office->building_id;

        $office->delete();
        Session::flash('success',' Office Deleted');

        return redirect()->route('building.show' , $id);

    }
}
