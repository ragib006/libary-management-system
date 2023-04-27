




<?php   

  $name = Session::get('admin_name');


?>



  <div class="myheader" style="background-color:green;overflow:hidden">
        
      <div class="logocontent" style="float:left;overflow:hidden">
       <p style="padding:10px;margin-left:50px;font-weight: bold;color:white">Libary Management</p>
     </div>


      <div class="logocontent" style="float:right;overflow:hidden">
       <p style="padding:10px;margin-right:50px;font-weight: bold;color:white">{{$name}}</p>
     </div>


  </div>