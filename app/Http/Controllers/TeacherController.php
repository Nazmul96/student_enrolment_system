<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TeacherController extends Controller
{
    public function allteacher(){
        $teacher_info=DB::table('teachers_tbl')->get();
        return view('admin.allteacher',compact('teacher_info'));
        
    }

    public function addteacher(){
        return view('admin.add_teacher');
    }

    public function saveteacher(Request $num){
        $data=array();
        $data['teacher_name']=$num->name;        
        $data['teacher_phone']=$num->phone;
        $data['teacher_email']=$num->mail;
        $data['teacher_address']=$num->address;
        $data['teacher_department']=$num->student_dpt;
        
        $image=$num->file('teacher_image');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.$ext;
            $upload_path='public/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            $data['teacher_image']=$image_url;
            DB::table('teachers_tbl')->insert($data);
            $notification=array(
                'message'=>'Teacher Successfully Added',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        }
        else{
            DB::table('teachers_tbl')->insert($data);
            $notification=array(
                'message'=>'Teacher Successfully Added',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        }
    }
}
