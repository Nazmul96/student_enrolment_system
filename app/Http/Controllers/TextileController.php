<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TextileController extends Controller
{
    public function textile(){
        $textile_info=DB::table('users_tbl')->where('student_deparment',4)->get();
        return view('admin.textile',compact('textile_info'));
    }
}
