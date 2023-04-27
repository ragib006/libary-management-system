@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">

   <h3 style="margin-bottom:20px">All  Successfull Return  Libary Book</h3>

       
       <table style="width:100%">
  <tr>
    <th style=""> ID</th>
    <th style="width:300px">Book Name</th>
     <th style="width:150px">Student Name</th>
      <th style="width:150px">Roll</th>

       <th style="width:80px">Department</th>
    <th style="width:100px">Take Date</th>
        <th style="width:100px">Last Date To Return</th>
      <th style="width:100px">Student Return Date</th>
     <th style="width:100px">Action</th>
  </tr>



@foreach($allsuccessreturnbooklist as $v_show)

  <tr>
    <td style="padding:10px 10px">{{$v_show->take_id}}</td>
    <td>{{$v_show->take_book_stu_bookname}}</td>
       <td>{{$v_show->take_book_stu_name}}</td>

        <td>{{$v_show->take_book_stu_roll}}</td>

          <td>{{$v_show->take_book_stu_department}}</td>
          <td>{{$v_show->take_book_date}}</td>
          <td>{{$v_show->return_book_date}}</td>
             <td>{{$v_show->student_return_date}}</td>
        <td><center>

      <Button>success</Button>
    

    </center></td>

  </tr>
@endforeach


</table>

      
    
     </div>






@endsection