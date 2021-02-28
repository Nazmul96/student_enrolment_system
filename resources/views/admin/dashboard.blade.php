@extends('layout');
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Student</h2>
        @php
          $student=DB::table('users_tbl')->count('student_id');  

        @endphp
        <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align:center;">{{$student}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-1" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">All Teacher</h2>
        @php
          $teacher=DB::table('teachers_tbl')->count('teacher_id');  

        @endphp
        <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align:center;">{{$teacher}}</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-2" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Tution Fee</h2>
        <p style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">Monthly:8000 tk</p>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-3" class="card-float-chart"></div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3 grid-margin">
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Revenue</h2>
      </div>
      <div class="dashboard-chart-card-container">
        <div id="dashboard-card-chart-4" class="card-float-chart"></div>
      </div>
    </div>
  </div>

  <div class="col-6 grid-margin d-flex align-items-stretch">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-12 mb-3">
        <div class="social-panel bg-facebook">
          @php
          
            $cse=DB::table('users_tbl')->where('student_deparment',1)->count(); 
            
          @endphp
          <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">CSE  {{$cse}} </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12 mb-3">
        <div class="social-panel bg-twitter">
          
          @php
          
            $it=DB::table('users_tbl')->where('student_deparment',2)->count(); 
            
          @endphp
          <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">IT  {{$it}} </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12 mb-3">
        <div class="social-panel bg-google">
          @php
          
            $eee=DB::table('users_tbl')->where('student_deparment',3)->count(); 
            
          @endphp
          <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">EEE  {{$eee}} </p>
          </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12">
        <div class="social-panel bg-linkedin mb-3">
          @php
          
          $t=DB::table('users_tbl')->where('student_deparment',4)->count(); 
          
        @endphp
        <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">Textile  {{$t}} </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12 mb-3">
        <div class="social-panel bg-facebook">
          @php         
          $b=DB::table('users_tbl')->where('student_deparment',5)->count(); 
          @endphp
        <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">BBA  {{$b}} </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-12 mb-3">
        <div class="social-panel bg-twitter">
          @php          
            $m=DB::table('users_tbl')->where('student_deparment',6)->count(); 
         @endphp
        <p class="mb-0" style="font-family: cursive; font-size: 21px; font-weight: bold; text-align:center;">MBA  {{$m}} </p>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection