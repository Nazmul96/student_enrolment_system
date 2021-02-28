<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;
use Session;
session_start();

class AdminController extends Controller
{
   
     //logout.....
     public function logout(){
        Session::put('admin_email',null);
        Session::put('admin_password',null);
        return Redirect::to('/backend');
    }

    //admin login.....

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function login(Request $req){
        $email=$req->email;
        $password=md5($req->password);
        $result=DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();
        if($result){
            Session::put('admin_email',$result->admin_email);
            Session::put('admin_password',$result->admin_password);
            return Redirect::to('admin_dashboard');
        }
        else{
            Session::put('exception','Email or Password Inavlid');
            return Redirect::to('/backend');
        }
    }

    //view profile.....
    public function view(){
        return view('admin.view_profile');
    }
    //user setting...that will help to upadte password
    public function setting(){
        return view('admin.setting');
    }
}
