@extends('layout.adminlayout')

@section('change')





<?php   

  $allstudent = DB::table('addstudents')->count();
  $totalbook = DB::table('addlibarybooks')->count();


?>


     <div class="content" style="height:100px;width:500px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Total Student</p>
       <p style="padding-left:20px;font-size:22px;">{{$allstudent}}</p>
    
     </div>

   <div class="content" style="height:100px;width:500px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Total Book</p>
       <p style="padding-left:20px;font-size:22px;">{{$totalbook}}</p>
    
     </div>












@endsection