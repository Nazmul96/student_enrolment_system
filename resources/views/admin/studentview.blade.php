@extends('layout')
@php
  function convert_department($value){
      $values=[
        1=>'CSE',
        2=>'IT',
        3=>'EEE',
        4=>'TEXTILE',
        5=>'BBA',
        6=>'MBA',

  ];
      return $values[$value];
  }   

@endphp
@section('content')


    <div class="row user-profile">
      <div class="col-lg-12 side-left">
        <div class="card mb-4">
          <div class="card-body avatar">
            <h2 class="card-title">Info</h2>
            <img src="{{URL::to($studentview->student_image) }}">
            <p class="name">{{$studentview->student_name}}</p>
            <p class="designation">{{$studentview->student_roll}}</p>
            <a class="email" href="#">{{$studentview->student_email}}</a>
            <a class="number" href="#">{{$studentview->student_phone}}</a>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body overview">
            <ul class="achivements">
              <p style="font-family:Verdana;font-size:15px; color:rgb(160, 53, 133); font-weight:bolder;" >Bangladesh University of Business Technology</p>
             
            </ul>
            <div class="wrapper about-user">
              <h2 class="card-title mt-4 mb-3">About</h2>
              <p>The total nformation of this student is given below</p>
            </div>
            <div class="info-links">
              <a class="website">
                <i class="icon-globe icon">Father's Name:</i>
                <span style="font-family: Verdana;font-size: 13px;">{{$studentview->student_fathersname}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Mothers's Name:</i>
                <span style="font-family: Verdana;font-size: 15px;">{{$studentview->student_mothersname}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Address:</i>
                <span style="font-family: Verdana;font-size: 15px;">{{$studentview->student_address}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Deparment:</i>
                <span style="font-family: Verdana;font-size: 15px;">{{convert_department($studentview->student_deparment)}}</span>
              </a>
              <a class="website">
                <i class="icon-globe icon">Admission Year:</i>
                <span style="font-family: Verdana;font-size: 15px;">{{$studentview->student_admissionyear}}</span>
              </a>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
  


@endsection