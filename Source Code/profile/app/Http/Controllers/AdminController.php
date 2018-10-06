<?php

namespace App\Http\Controllers;

use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  var $showProjects;
  var $showHome;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct() {

        $this->middleware('auth')->except(['admin','edit']);
    }

     public function view()
     {
      $admin=Admin::all();
      return view('index', compact('admin'));
     }

    public function index()
    {
      $showProjects="true";
      $admin=Admin::all();
      return view('admin', compact('admin','showProjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


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
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        $showProjects="true";
        $admi=Admin::find($admin);
        return view('edit', compact('admi','showProjects'));
        // $a=dd($admin);
        // return $a;
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $showProjects="true";
        $admin=Admin::find($request->input('id'));
        $admin->name=$request->input('name');
        $admin->address=$request->input('address');
        $admin->bachelor=$request->input('bachelor');
        $admin->phone=$request->input('phone');
        $admin->email=$request->input('email');
        $admin->git_link=$request->input('git_link');
        $admin->save();
        $admin=Admin::all();
        return view('admin', compact('admin','showProjects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
