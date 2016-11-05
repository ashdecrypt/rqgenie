<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Illuminate\Html;


class RolesController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('role.index');
    }

    public function list()
    {
    	$roles = Role::all();
        return view('role.list')
        ->with('roles',$roles);
    }

    public function add()
    {
        return view('role.add');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
        'name' => 'required|unique:roles|max:255',
        'display_name' => 'required',
        'description' => 'required|max:255',
    ]);

        $role = new Role;
        $role->name = $request->name;
        $role->display_name = $request->display_name;
        $role->description = $request->description;

        $role->save();

    	$roles = Role::all();
        return view('role.list')
        ->with('roles',$roles);

    }

    public function show($id)
    {
    	$role = Role::find($id);
        return view('role.show')
        ->with('role',$role);
    }

    public function edit($id)
    {
    	$role = Role::find($id);
        return view('role.edit')
        ->with('role',$role);
    }

    public function update(Request $request, $id)
    {


    	        $this->validate($request, [
        'display_name' => 'required',
        'description' => 'required|max:255',
    ]);

    	$role = Role::find($id);

        $role->name = $request->input('name');
        $role->display_name = $request->input('display_name');
        $role->description = $request->input('description');

        $role->update();
                        
    	$roles = Role::all();
        return view('role.list')
        ->with('roles',$roles);
    }





}
