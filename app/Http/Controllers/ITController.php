<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;

class ITController extends Controller
{
    public function it(){
        $IT_info=DB::table('users_tbl')->where('student_deparment',2)->get();
        return view('admin.it',compact('IT_info'));
    }
}
