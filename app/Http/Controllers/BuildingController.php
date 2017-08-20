<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Facility;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Providing_request;

use Illuminate\Support\Facades\Auth;
use Session;

class BuildingController extends Controller
{
/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buildings = Building::paginate(2);
        return view('admin.dashboard.buildings.index')->with('buildings',$buildings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        //$facility = Facility::all();
        return view('admin.dashboard.buildings.create')->with('categories',$categories);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request ,array(
            'name'=>'required|max:200',
            'description'=>'required',
            'about_us'=>'required',
            'highlights'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'working_time'=>'required'
        ));

        $building = new Building;
        $building->name = $request->name;
        $building->description = $request->description;
        $building->about_us = $request->about_us;
        $building->address = $request->address;
        $building->highlights = $request->highlights;
        $building->phone = $request->phone;
        $building->working_time = $request->working_time;
        $building->user_id = Auth::user()->id;
        $building->save();

        $providing_request = new Providing_request;
        $providing_request->user_id = Auth::user()->id;
        $providing_request->building_id=$building->id;
        $providing_request->current_status = '0';
        $providing_request->save();

        $building->categories()->sync($request->categories , false);



        Session::flash('success','Your Building now under Request');

        return redirect()->route('building.show', $building->id);
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
        return view('admin.dashboard.buildings.show')->with('building',$building);
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

        $building = Building::find($id);
        $categories = Category::all();
        $categories2 = array();
        foreach ($categories as $category)
        {
            $categories2[$category->id] = $category->name;
        }
        return view('admin.dashboard.buildings.edit')->with('building',$building)->with('categories',$categories2);
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
        //
        $this->validate($request ,array(
            'name'=>'required|max:200',
            'description'=>'required',
            'about_us'=>'required',
            'highlights'=>'required',
            'phone'=>'required',
            'address'=>'required',
            'working_time'=>'required'
        ));

        $building = Building::find($id);
        $building->name = $request->input('name');
        $building->description = $request->input('description');
        $building->highlights = $request->input('highlights');
        $building->about_us = $request->input('about_us');
        $building->address = $request->input('address');
        $building->phone = $request->input('phone');
        $building->working_time = $request->input('working_time');
        $building->user_id= Auth::user()->id;
        $building->save();

        if(isset($request->caregories))
        {
            $building->categories()->sync($request->categories);
        }
        else{
            $building->categories()->sync(array());
        }


        Session::flash('success','Your Building now Update');

        return redirect()->route('building.show', $id);

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
    }
}
