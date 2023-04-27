@extends('layout.adminlayout')

@section('change')






  <div class="content" style="overflow:hidden;margin:20px 20px">

   <h3>Add Libary Book</h3>

       
       

        <form action="{{url('/addlibarybook_form_action')}}" method="post" style="padding:30px" enctype="multipart/form-data">

                {{ csrf_field() }}

        <div style="overflow:hidden">

           <span>Book Name</span></br>
           <input type="text"  name="book_name" placeholder="Enter Book Name" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>

                 <div style="overflow:hidden">

           <span>Book Department</span></br>
           

           <select name="book_department" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>
             
             <option>Select</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="ECE">ECE</option>
             <option value="IPE">IPE</option>
             <option value="ME">ME</option>

           </select>

        </div>


               <div style="overflow:hidden">

           <span>Book Image</span></br>
           <input type="file"  name="book_image" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>

        </div>



        




         <input type="submit" value="Submit" style="margin-top:20px">




       </form>
    
     </div>






@endsection