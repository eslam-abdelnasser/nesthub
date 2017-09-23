<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image ;
use File;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admins = Admin::paginate(10);
        return view('admin.admins.index')->with('admins',$admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.admins.create');

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

        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'job_title' => 'required',
            'phone' => 'required',
        ));

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->phone = $request->phone;
        $admin->job_title = $request->job_title;

        $dir = public_path().'/uploads/admins/';
        $file = $request->file('image_url') ;
        $fileName =  str_random(6).'.'.$file->getClientOriginalExtension();
        $file->move($dir , $fileName);
        // resize image using intervention
        Image::make($dir . $fileName)->resize(270, 137)->save($dir. $fileName);
        $admin->image_url = $fileName ;

        $admin->save();

        $admins = Admin::paginate(10);
        return view('admin.admins.index')->with('admins',$admins);
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
        $admin = Admin::find($id);
        return view('admin.admins.edit')->with('admin',$admin);
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
        $this->validate($request,array(
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'job_title' => 'required',
            'phone' => 'required',
        ));

        $admin = Admin::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        if($request->password != ""){
            $admin->password = bcrypt($request->password);
        }
        $admin->phone = $request->phone;
        $admin->job_title = $request->job_title;


        if($request->hasFile('image_url')){
            //upload image to server directory to service
            $dir = public_path().'/uploads/admins/';
            File::delete($dir . $admin->image_url);
            $file = $request->file('image_url') ;
            $fileName =  str_random(6).'.'.$file->getClientOriginalExtension();
            $file->move($dir , $fileName);
            // resize image using intervention
            Image::make($dir . $fileName)->resize(270, 137)->save($dir. $fileName);
            $admin->image_url = $fileName ;
        }


        $admin->save();

        $admins = Admin::paginate(10);
        return view('admin.admins.index')->with('admins',$admins);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $admin = Admin::find($id);
        $admin->delete();

        $admins = Admin::paginate(10);
        return view('admin.admins.index')->with('admins',$admins);
    }
}
