<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;

class CseController extends Controller
{
    public function cse(){
        $cse_info=DB::table('users_tbl')->where('student_deparment',1)->get();
        return view('admin.cse',compact('cse_info'));
    }
}
