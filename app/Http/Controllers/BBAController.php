<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BBAController extends Controller
{
    public function bba(){
        $bba_info=DB::table('users_tbl')->where('student_deparment',5)->get();
        return view('admin.bba',compact('bba_info'));
    }
}
