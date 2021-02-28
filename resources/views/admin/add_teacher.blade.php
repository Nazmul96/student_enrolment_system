@extends('layout');

@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Add Teacher</h2>
            <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
                ?>
              </p>
            <form class="forms-sample" method="POST" action="{{url('save_teacher')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Teacher Name</label>
                    <input type="text" class="form-control p-input" name="name" aria-describedby="emailHelp" placeholder="Enter Teacher Name">                   
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Phone</label>
                    <input type="text" class="form-control p-input" name="phone" placeholder="Teacher Phone">
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Email</label>
                    <input type="email" class="form-control p-input" name="mail" placeholder="Teacher Email">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Address</label>
                    <input type="text" class="form-control p-input" name="address" placeholder="Teacher Address">
                </div>
                
                
                <div class="form-group">
                    <label>Teacher Image</label>
                    <div class="row">
                    <div class="col-12">
                        <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>image</label>
                        <input type="file" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp" name="teacher_image">
                       
                    </div>
                    </div>
                </div>
               
                <div class="form-group">
                    <label for="exampleInputPassword1">Teacher Department</label>
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