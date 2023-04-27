@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">

   <h3 style="margin-bottom:20px">All  Student</h3>

       
       <table style="width:100%">
  <tr>
    <th style="width:50px"> ID</th>
    <th style="width:150px">Student Name</th>
     <th style="width:150px">Student Roll</th>
      <th style="width:150px">Student Department</th>
    <th style="width:250px">Student Email</th>
    <th style="width:150px">Student Phone</th>
   
    <th style="width:150px">Student Address</th>

     <th style="width:50px">Action</th>
  </tr>



@foreach($getallstudent as $v_show)

  <tr>
    <td style="padding:10px 10px">{{$v_show->student_id}}</td>
    <td>{{$v_show->student_name}}</td>
    <td>{{$v_show->student_roll}}</td>
    <td>{{$v_show->student_department}}</td>
    <td>{{$v_show->student_email}}</td>
    <td>{{$v_show->student_phone_number}}</td>
    <td>{{$v_show->student_address}}</td>
    <td><a href="{{URL::to('/student_delete/'.$v_show->student_id)}}"><Button>Delete</Button></a></td>
  </tr>
@endforeach


</table>

      
    
     </div>






@endsection