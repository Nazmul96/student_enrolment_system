<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;
use Session;
session_start();

class AddstudentController extends Controller
{
    public function addstudent(){
        return view('admin.addstudent');
    }

    public function savestudent(Request $num){

        $data=array();
        $data['student_name']=$num->name;
        $data['student_roll']=$num->roll;
        $data['student_fathersname']=$num->father;
        $data['student_mothersname']=$num->mother;
        $data['student_email']=$num->mail;
        $data['student_phone']=$num->phone;
        $data['student_address']=$num->address;
        $data['student_password']=md5($num->passw);
        $data['student_admissionyear']=$num->admissin;
        $data['student_deparment']=$num->student_dpt;
        
        $image=$num->file('student_image');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.$ext;
            $upload_path='public/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            $data['student_image']=$image_url;
            DB::table('users_tbl')->insert($data);
            Session::put('exception','student successfully added');
            return Redirect::to('addstudent');
            
        }
        else{
            DB::table('users_tbl')->insert($data);
            Session::put('exception','student successfully added');
            return Redirect::to('addstudent');
        }
    }
   
}
