@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">
   
    <p style="font-weight:bold;font-size:22px">Book Id   :  <span>{{$bookinfo->book_id}}</span></p>
   <p style="font-weight:bold;font-size:22px">Book Name   :  <span>{{$bookinfo->book_name}}</span></p>

       
   <p style="font-weight:bold;font-size:18px;margin-top:20px">Student Take Book </p>   

              




              <form class="form-horizontal" action="{{url('/student_take_book_form_action/'.$bookinfo->book_id)}}" method="post" enctype="multipart/form-data">

            

                {{ csrf_field() }}

        <div style="overflow:hidden">

           <span>Student Roll</span></br>
           <input type="text"  name="take_book_stu_roll" placeholder="Enter Student Roll" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>

                 <div style="overflow:hidden">

           <span>Student Department</span></br>
           

           <select name="take_book_stu_department" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>
             
             <option>Select</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="ECE">ECE</option>
             <option value="IPE">IPE</option>
             <option value="ME">ME</option>

           </select>

        </div>


        <div style="overflow:hidden">

           <span>Book Take Date</span></br>
           <input type="date"  name="take_book_date"  style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>

   <div style="overflow:hidden">

           <span>Book Return Date</span></br>
           <input type="date"  name="return_book_date" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>






         <input type="submit" value="Submit" style="margin-top:20px">




       </form>
    
     </div>






@endsection