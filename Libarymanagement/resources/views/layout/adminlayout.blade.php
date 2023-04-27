<!DOCTYPE html>
<html>
<style>

  *{

     padding:0;
     margin:0;
     outline:0;

  }

  table, th, td {
  border:1px solid black;
}

</style>
<body>



<div>



    @include('layout.header')







 <div class="mainsestion" style="overflow:hidden">


  @include('layout.sidebar')
  





  <div class="middlecontent" style="overflow:hidden;float:left">





@yield('change')


<!-----------

     <div class="content" style="height:100px;width:250px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Total Student</p>
       <p style="padding-left:20px;font-size:22px;">100</p>
    
     </div>

   <div class="content" style="height:100px;width:250px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Total Book</p>
       <p style="padding-left:20px;font-size:22px;">500</p>
    
     </div>

        <div class="content" style="height:100px;width:250px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Pending Book</p>
       <p style="padding-left:20px;font-size:22px;">50</p>
    
     </div>

        <div class="content" style="height:100px;width:250px;overflow:hidden;background-color:pink;margin:10px;float:left">

       <p style="padding-top:20px;padding-left:20px;font-size:25px;padding-bottom:10px">Return Book</p>
       <p style="padding-left:20px;font-size:22px;">106</p>
    
     </div>



----------->






    
  </div>







 </div>








	

</div>

</body>
</html>
