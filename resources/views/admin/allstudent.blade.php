@extends('layout');

@section('content')

    <h1 class="page-title">Data table</h1>
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">Data table</h2>
        <div class="row">
          <div class="col-12">
            <table id="order-listing" class="table table-striped" style="width:100%;">
              <thead>
                <tr>
                    
                    <th>St_Roll #</th>
                    <th>St_Name</th>
                    <th>Phone</th>
                    <th>Image</th>
                    <th>Address</th>
                    <th>Department</th>                   
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($student_info as $row)
                <tr>
                 
                    <td>{{$row->student_roll}}</td>
                    <td>{{$row->student_name}}</td>
                    <td>{{$row->student_phone}}</td>
                    <td><img src="{{$row->student_image}}" style="height: 40px; width:70px"></td>
                    <td>{{$row->student_address}}</td>
                    <td>
                      @if($row->student_deparment==1)
                      <span class="label label-success">{{'CSE'}}</span>
                    
                      @elseif($row->student_deparment==2)
                      <span class="label label-success">{{'IT'}}</span>
                      @elseif($row->student_deparment==3)
                      <span class="label label-success">{{'EEE'}}</span>
                      @elseif($row->student_deparment==4)
                      <span class="label label-success">{{'Textile'}}</span>
                      @elseif($row->student_deparment==5)
                      <span class="label label-success">{{'BBA'}}</span>
                      @else
                      <span class="label label-success">{{'MBA'}}</span>
                      @endif
                    </td>
                    <td>
                      <a href="{{url('student_view/'.$row->student_id)}}"><button class="btn btn-outline-primary m-1">View</button></a>
                      <a href="{{url('student_edit/'.$row->student_id)}}"><button class="btn btn-outline-warning m-1">Edit</button></a>
                      <button href="{{url('student_delete/'.$row->student_id)}}"class="btn btn-outline-danger m-1" id="delete">delete</button>
                    </td>
                </tr>                                                         
                      @endforeach                                                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  

@endsection