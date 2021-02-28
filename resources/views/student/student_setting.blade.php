@extends('student_layout');

@section('content')
<div class="col-12 col-lg-6 grid-margin">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Update Your profile</h2>
            <p class="alert-success">
                <?php
                $exception=Session::get('exception');
                if($exception){
                  echo $exception;
                  Session::put('exception',null);
                }
                ?>
              </p>
            <form class="forms-sample" method="POST" action="{{url('student_own_update')}}">
                @csrf               
                                                           
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Phone</label>
                    <input type="text" class="form-control p-input" name="phone" value="{{$studentsetting->student_phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Address</label>
                    <input type="text" class="form-control p-input" name="address" value="{{$studentsetting->student_address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Student Password</label>
                    <input type="password" class="form-control p-input" name="passw" value="{{$studentsetting->student_password}}">
                </div>
                                              
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        
        </div>
    </div>
@endsection