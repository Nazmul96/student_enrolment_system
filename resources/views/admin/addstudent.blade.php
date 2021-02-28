@extends('layout');

@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Student</h2>
            <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
                ?>
              </p>
            <form class="forms-sample" method="POST" action="{{url('save_student')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" placeholder="Enter Student Name">                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Roll</label>
                    <input type="text" class="form-control p-input" name="roll" placeholder="Student Roll">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Father's Name</label>
                    <input type="text" class="form-control p-input" name="father" placeholder="Student Father's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Mother's Name</label>
                    <input type="text" class="form-control p-input" name="mother" placeholder="Student mother's Name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Email</label>
                    <input type="email" class="form-control p-input" name="mail" placeholder="Student Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="phone" placeholder="Student Phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="address" placeholder="Student Address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="password" class="form-control p-input" name="passw" placeholder="Student Password">
                </div>
                
                <div class="form-group">
                    <label>Student Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                        <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="student_image">
                       
                    </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Admission Year</label>
                    <input type="date" class="form-control p-input" name="admissin" placeholder="admission year">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Department</label>
                    <select name="student_dpt" id="" class="form-control p-input">
                        <option value="1">CSE</option>
                        <option value="2">IT</option>
                        <option value="3">EEE</option>
                        <option value="4">TEXTILE</option>
                        <option value="5">BBA</option>
                        <option value="6">MBA</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        
        </div>
    </div>
@endsection