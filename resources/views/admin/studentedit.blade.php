@extends('layout');

@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit</h2>
            <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
                ?>
              </p>
            <form class="forms-sample" method="POST" action="{{url('student_update/'.$studentedit->student_id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" value="{{$studentedit->student_name}}">                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="roll" value="{{$studentedit->student_roll}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Father's Name</label>
                    <input type="text" class="form-control p-input" name="father" value="{{$studentedit->student_fathersname}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Mother's Name</label>
                    <input type="text" class="form-control p-input" name="mother" value="{{$studentedit->student_mothersname}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Email</label>
                    <input type="email" class="form-control p-input" name="mail" value="{{$studentedit->student_email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="phone" value="{{$studentedit->student_phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="address" value="{{$studentedit->student_address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="password" class="form-control p-input" name="passw" value="{{$studentedit->student_password}}">
                </div>
                
                <div class="form-group">
                    <label>Student Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                        <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="student_image">

                        Old Image: <img src="{{url($studentedit->student_image)}}" style="height:40px; width:80px">
                        <input type="hidden" name="old_photo" value="{{$studentedit->student_image}}">
                        
                       
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Admission Year</label>
                    <input type="date" class="form-control p-input" name="admissin" value="{{$studentedit->student_admissionyear}}">
                </div>
                

                <button type="submit" class="btn btn-success">Update</button>
            </form>
        
        </div>
    </div>
@endsection