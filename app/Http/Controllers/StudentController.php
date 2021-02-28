<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;
use Session;
session_start();
class StudentController extends Controller
{   
    
    public function studentdashboard(){
        return view('student.dashboard');
    }
    //student login.........
    public function studentlogin(Request $req){
        $email=$req->email;
        $password=md5($req->pass);
        $result=DB::table('users_tbl')
        ->where('student_email',$email)
        ->where('student_password',$password)
        ->first();
        if($result){
            Session::put('student_id',$result->student_id);
            Session::put('student_email',$result->student_email);
            Session::put('student_password',$result->student_password);
            return Redirect::to('student_dashboard');
        }
        else{
            Session::put('exception','Email or Password Inavlid');
            return Redirect::to('/');
        }
    }
    //student profile view............
    public function studentprofile(){
        $student_id=session::get('student_id');
        $student_profile=DB::table('users_tbl')->where('student_id',$student_id)->first();
      return view('student.student_profile',compact('student_profile'));
    }
    //student logout......................
    public function studentlogout(){
        Session::put('student_id',null);
        Session::put('student_email',null);
        Session::put('student_password',null);
        return Redirect::to('/');
    }
    //student setting..................
    public function studentsetting(){
        $student_id=session::get('student_id');
        $studentsetting=DB::table('users_tbl')->where('student_id',$student_id)->first();
        return view('student.student_setting',compact('studentsetting'));
    }

    //student update........
    public function studentupdate(Request $num){
        $student_id=session::get('student_id'); 
        $data=array();       
        $data['student_phone']=$num->phone;
        $data['student_address']=$num->address;
        $data['student_password']=md5($num->passw);
         $update=DB::table('users_tbl')->where('student_id',$student_id)->update($data);
         if($update){
            $notification=array(
                'message'=>'Successfully updated',
                'alert-type'=>'success',
            );
            return redirect()->route('student_dashboard')->with($notification);
        }
        
    }
    
}
