@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">

   <h3 style="margin-bottom:20px">All  Libary Book</h3>

       
       <table style="width:100%">
  <tr>
    <th style="width:50px"> ID</th>
    <th style="width:450px">Book Name</th>
     <th style="width:150px">Book Department</th>
      <th style="width:200px">Book Image</th>
  

     <th style="width:200px">Action</th>
  </tr>



@foreach($getalllibarybook as $v_show)

  <tr>
    <td style="padding:10px 10px">{{$v_show->book_id}}</td>
    <td>{{$v_show->book_name}}</td>
       <td><center>{{$v_show->book_department}}</center></td>
    <td><center><img src="{{$v_show->book_image}}" style="width:50px;height:50px;margin-top:10px;margin-bottom:10px"></center></td>

    <td><center>

      <a href="{{URL::to('/give_book/'.$v_show->book_id)}}"><Button>Give Book</Button></a>
      <a href="{{URL::to('/book_delete/'.$v_show->book_id)}}"><Button>Delete</Button></a>

    </center></td>

  </tr>
@endforeach


</table>

      
    
     </div>






@endsection