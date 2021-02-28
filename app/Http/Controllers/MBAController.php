<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MBAController extends Controller
{
    public function mba(){
        $mba_info=DB::table('users_tbl')->where('student_deparment',6)->get();
        return view('admin.mba',compact('mba_info'));
    }
}
