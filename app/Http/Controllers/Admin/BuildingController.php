<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Facility;
use App\Models\Office;
use App\User;
use Illuminate\Http\Request;
use App\Models\Building;
use App\Models\Providing_request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
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
        return view('admin.buildings.index')->with('buildings',$buildings);
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
        $facility = Facility::all();
        $user = User::all();
        return view('admin.buildings.create')->with('categories',$categories)
            ->with('facilities',$facility)->with('users',$user);

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
            'working_time'=>'required',
            'user'=>'required'
        ));

        $building = new Building;
        $building->name = $request->name;
        $building->description = $request->description;
        $building->about_us = $request->about_us;
        $building->address = $request->address;
        $building->highlights = $request->highlights;
        $building->phone = $request->phone;
        $building->working_time = $request->working_time;
        $building->user_id = $request->user;
        $building->save();

        $user = User::find($request->user);
        $user->type = 1;
        $user->save();

        $building->categories()->sync($request->categories , false);
        $building->facilities()->sync($request->facilities,false);


        Session::flash('success',' Your Building now under Request');

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
        return view('admin.buildings.show')->with('building',$building);
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
        $facilities = Facility::all();
        $facilities2 = array();

//        dd($building->categories()->getRelatedIds());
        foreach ($facilities as $facility)
        {
            $facilities2[$facility->id] = $facility->name;
        }
        return view('admin.buildings.edit')->with('building',$building)->with('categories',$categories2)
            ->with('facilities',$facilities2);
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
            'working_time'=>'required',
            'user'=>'required'
        ));

        $building = Building::find($id);
        $building->name = $request->input('name');
        $building->description = $request->input('description');
        $building->highlights =  $request->input('highlights');
        $building->about_us =  $request->input('about_us');
        $building->address = $request->input('address');
        $building->phone = $request->input('phone');
        $building->working_time = $request->input('working_time');
        $building->user_id= $request->input('user');
        $building->save();

        if(isset($request->categories)){
            $building->categories()->sync($request->categories);
        }else{
            $building->categories()->sync(array());
        }

        if(isset($request->facilities)){
            $building->facilities()->sync($request->facilities);
        }
        else{
            $building->facilities()->sync(array());
        }

        Session::flash('success',' Your Building now Update');

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
        $building = Building::find($id);
        $user = User::find($building->user_id);
        $user->type = 0;
        $user->save();
        $building->delete();
        Session::flash('success',' Building Deleted');


        return redirect()->route('building.index');

    }
}
