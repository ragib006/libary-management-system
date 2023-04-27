<!DOCTYPE html>
<html>
<style>

</style>
<body>



<div style="width:40%;margin:100px auto;background-color:gray">
	


<form action="{{url('/adminlogin_form_action')}}" method="post" style="padding:30px">

                {{ csrf_field() }}
    
    <center><h3 style="color:white">Admin Login Panel</h3></center>


  	<div>
    <span>Email</span></br>
    <input type="text" id="fname" name="admin_email" placeholder="Enter Email" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required>
    </div>

    <div>
    <span>Password</span></br>
    <input type="password" id="lname" name="admin_password" placeholder="Enter password" style="width:530px;height:30px;padding-left:10px;margin-top:10px;margin-bottom:10px" required></br>
    </div>

  
    <input type="submit" value="Submit" style="margin-top:20px">


  </form>
</div>

</body>
</html>
