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
                    
                   
                    <th>T_Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Address</th>
                    <th>Department</th>                   
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($teacher_info as $row)
                <tr>
                 
                    
                    <td>{{$row->teacher_name}}</td>
                    <td>{{$row->teacher_phone}}</td>
                    <td>{{$row->teacher_email}}</td>
                    <td><img src="{{$row->teacher_image}}" style="height: 40px; width:70px"></td>
                    <td>{{$row->teacher_address}}</td>
                    <td>
                      @if($row->teacher_department==1)
                      <span class="label label-success">{{'CSE'}}</span>
                    
                      @elseif($row->teacher_department==2)
                      <span class="label label-success">{{'IT'}}</span>
                      @elseif($row->teacher_department==3)
                      <span class="label label-success">{{'EEE'}}</span>
                      @elseif($row->teacher_department==4)
                      <span class="label label-success">{{'Textile'}}</span>
                      @elseif($row->teacher_department==5)
                      <span class="label label-success">{{'BBA'}}</span>
                      @else
                      <span class="label label-success">{{'MBA'}}</span>
                      @endif
                    </td>
                    <td>
                      
                      <button href="{{url('teacher_delete/'.$row->teacher_id)}}"class="btn btn-outline-danger m-1" id="delete">delete</button>
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