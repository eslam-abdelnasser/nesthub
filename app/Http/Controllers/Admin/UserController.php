<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;


use App\Models\Admin ;
use App\Role;
use App\Permission;
//use  Illuminate\Routing\Route ;
use Illuminate\Support\Facades\Route;
//use  Illuminate\Routing\Route ;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('admin.users.index')->with('users',$users);
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
        //
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
        dd('ahmed');

        $user = User::find($id);
        return view('admin.users.show')->with('user',$user);
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
        dd('ahmed');
        $user = User::find($id);
        $user->delete();
        Session::flash('success',' User Deleted');

        return redirect()->route('user.index');
    }




    public function testRoles(){

//        $admin = new Role();
//        $admin->name         = 'admin';
//        $admin->display_name = 'User Administrator'; // optional
//        $admin->description  = 'User is allowed to manage and edit other users'; // optional
//        $admin->save();
//        $admin_user = Admin::find(1);
//
////        dd($admin_user);
//        $admin_user->roles()->attach(1);

//        dd(Route::getName());
        $routeCollection = Route::getRoutes();
//        echo '<pre>';
//        dd($routeCollection->nameList);
        foreach ($routeCollection as $value) {
            $data[] = $value->getName();
        }

        dd($data);


    }
}
