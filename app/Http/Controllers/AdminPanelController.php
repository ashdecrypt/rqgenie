<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Input;

class AdminPanelController extends Controller
{
    //

        public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {	
    	$users=User::all();
        return view('adminpanel.index')->with('users', $users);
    }


    public function getroles(Request $request,$id)
    {	
    	$user=User::find($id);
    	//dd($user);
    	$roles=Role::all();
		return view('adminpanel.assign')->with('user', $user)->with('roles',$roles);
    }

    public function roleassign()
    {	
    	//dd('hit');
    	//$user=User::find($id);
    	
    	//$role_id = $request->role->id;
    	dd(Input::all());
    	//$user->attachrole($user_id,$role_id);
   	}

}
