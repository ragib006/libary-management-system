@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">

   <h3 style="margin-bottom:10px">Add Student</h3>

       
       

        <form action="{{url('/addstudent_form_action')}}" method="post" style="padding:30px">

                {{ csrf_field() }}

        <div style="overflow:hidden">

           <span>Student Name</span></br>
           <input type="text"  name="student_name" placeholder="Enter Student Name" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>

                 <div style="overflow:hidden">

           <span>Student Department</span></br>
           

           <select name="student_department" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>
             
             <option>Select</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="ECE">ECE</option>
             <option value="IPE">IPE</option>
             <option value="ME">ME</option>

           </select>

        </div>


               <div style="overflow:hidden">

           <span>Student Name</span></br>
           <input type="text"  name="student_roll" placeholder="Enter Student Roll" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>



        


    <div style="overflow:hidden">

           <span>Student Email</span></br>
           <input type="email"  name="student_email" placeholder="Enter Student Email" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>


  


           <div style="overflow:hidden">

           <span>Student Mobile Number</span></br>
           <input type="text"  name="student_phone_number" placeholder="Enter Student Phone Number" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>


               <div style="overflow:hidden">

           <span>Student Address</span></br>
           <input type="text"  name="student_address" placeholder="Enter Student Address" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>



         <input type="submit" value="Submit" style="margin-top:20px">




       </form>
    
     </div>






@endsection