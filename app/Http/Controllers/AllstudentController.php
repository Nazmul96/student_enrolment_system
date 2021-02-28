<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Redirect;
use DB;

class AllstudentController extends Controller
{
    public function allstudent(){
        $student_info=DB::table('users_tbl')->get();
        return view('admin.allstudent',compact('student_info'));
    }

    // student delete....
    public function deletestudent($id){
        $st_delete=DB::table('users_tbl')->where('student_id',$id)->first();
        $image=$st_delete->student_image;
        $delete=DB::table('users_tbl')->where('student_id',$id)->delete();
       
        
        if($delete){
            unlink($image);
            $notification=array(
                'message'=>'Successfully Deleted',
                'alert-type'=>'success',
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error',
            );
            return redirect()->back()->with($notification);
        }
    }
    //student view.....
    public function viewstudent($id){
        $studentview=DB::table('users_tbl')->where('student_id',$id)->first();
        return view('admin.studentview',compact('studentview'));
    }

    //student edit....
    public function editstudent($id){
        $studentedit=DB::table('users_tbl')->where('student_id',$id)->first();
        return view('admin.studentedit',compact('studentedit'));
    }

    //update student
    public function updatestudent(Request $num,$id){
        
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
        
        
        $image=$num->file('student_image');
        if($image){
            $image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.$ext;
            $upload_path='public/images/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path, $image_full_name);
            $data['student_image']=$image_url;
            unlink($num->old_photo);
            DB::table('users_tbl')->where('student_id',$id)->update($data);
            $notification=array(
                'message'=>'Successfully updated',
                'alert-type'=>'success',
            );
            return redirect()->route('allstudent')->with($notification);
        }
        else{
            $data['student_image']=$num->old_photo;
            DB::table('users_tbl')->where('student_id',$id)->update($data);
            $notification=array(
                'message'=>'Successfully updated',
                'alert-type'=>'success',
            );
            return redirect()->route('allstudent')->with($notification);
        }
    }
}