<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\support\Facades\Redirect;
use DB;

class EEEController extends Controller
{
    public function eee(){
        $eee_info=DB::table('users_tbl')->where('student_deparment',3)->get();
        return view('admin.eee',compact('eee_info'));
    }
    
}
