<?php

namespace App\Http\Controllers\Admin;

use App\Models\Facility;
use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Controller;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facilities = Facility::paginate(5);
        return view('admin.facilities.index')->with('facilities',$facilities);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,array(
            'name'=>'required|max:200',
            'status'=>'required|max:1',
            'type'=>'required|max:1'
        ));
        $facility = new Facility;
        $facility->name = $request->name;
        $facility->status = $request->status;
        $facility->type = $request->type;
        $facility->save();

        Session::flash('success',' Facility Added');
        return redirect()->route('facility.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facility = Facility::find($id);
        return view('admin.facilities.show')->with('facility',$facility);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::find($id);
        return view('admin.facilities.edit')->with('facility',$facility);

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
            'status'=>'required|max:1',
            'type'=>'required|max:1'

        ));
        $facility = Facility::find($id);
        $facility->name = $request->input('name');
        $facility->status = $request->input('status');
        $facility->type = $request->input('type');
        $facility->save();

        Session::flash('success',' Facility Updated');
        return redirect()->route('facility.index');
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
        $facility = Facility::find($id);
        $facility->delete();
        Session::flash('success',' Facility Deleted');

        return redirect()->route('facility.index');

    }
}
