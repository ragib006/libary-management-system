<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Str;

use DB;

use Session;

session_start();


class AdminController extends Controller
{
    

 //route er nam cilo /, ai route er kaj kobe adminloginpageshow function er vitor
 //Tahole adminloginpageshow function ta banai
 //amra akhane admin login page show korbo
 

	public function adminloginpageshow(){

      
      return view('admin.adminloginpage');


	}

    public function admindashboard(){

  
     return view('admin.dashboard');

    }


//admin login 

 public function adminloginformaction(Request $request){
        

        //from theke email niya email namer varible a raklam      
 	     $email=$request->admin_email;         
         //from theke email niya password namer varible a raklam, and password secqrity korar jonno MD5 use korse
         $password=MD5($request->admin_password);


     //database er admins table er email,pssword er sate jodi amader deya email password mile jay tahole oi admins table er   j row er sate mil hobe seta tule anbe and $result nam er varible a store korbe 
     //jahatu akta row er data abne tai ->first() use korci 

         $result=DB::table('admins')
          ->where('admin_email',$email)
          ->where('admin_password',$password)
          ->first();

      
     //email password sothik dele admin er data $result varible a asbe
     // akhabe check korlam jodi $result varible a admin er data thake tahole Session er vitor admin er name store thakbe
     // and admin er dashboard page a niya jabe
     // Session holo server e data store kore rakher jonno use hoy

      if($result){ 
          
          Session::put('admin_name',$result->admin_name);
          return Redirect::to('/admin_dashboard');

         }

      //email password shothik na dile akhe asbe,  Session er vitor store korman email or password invalied , ata frontend a show korabo
      // email password vul dile / route a niya jabe orthat login page ai takbe 
       else{


          Session::put('error_message','email or password invalied');
          return Redirect::to('/');
      
        }



 }




//addstudentpage   ai function er maddhome amra student add korar jonno page ta display korabo

 public function addstudentpage(){

  return view('admin.addstudent');
  //addstudent.blade.php page ta display koralam

 }


//student add korar jonno addstudentfromaction method banaci er vitor amra student add korar kaj korbo
//student add korbo addstudentformaction mathod dara


 public function addstudentformaction(Request $request){

 //array nilam
  $data = array();
  
  //akhane bole dilam data base student_name field er vitor amra frontend theke j student_name ta dici seta addhobe
  $data['student_name'] = $request['student_name'];
   //akhane bole dilam data base student_email field er vitor amra frontend theke j student_email ta dici seta addhobe
  $data['student_email'] = $request['student_email'];
  //akhane bole dilam data base student_department field er vitor amra frontend theke j student_department ta dici seta addhobe
  $data['student_department'] = $request['student_department'];
    //akhane bole dilam data base student_address field er vitor amra frontend theke j student_address ta dici seta addhobe
  $data['student_address'] = $request['student_address'];
   //akhane bole dilam data base student_phone_number field er vitor amra frontend theke j student_phone_number ta dici seta addhobe
  $data['student_phone_number'] = $request['student_phone_number'];

 //akhane bole dilam data base student_roll field er vitor amra frontend theke j student_roll ta dici seta addhobe
  $data['student_roll'] = $request['student_roll'];

  //amra frontend theke j student er information gula disi se gula $data varible er vito store kore raksi
  //student er information $data varible er vitor ase, se gula amra database er addstudents table er vitor insert kore dilam
 
  DB::table('addstudents')->insert($data);
          //data base er table er name addstudents , insert method er madhome data base a insert korlam $data varible k
          // karon amra frontend theke ja dici segula $data varible er vitor ase

   return Redirect::to('/all_student_page');

   //data insert hoyer por redirect hoye onno page a jabe, allstudent.blade.php page a jabe, tai ai page er route dilam


 }







//allstudentpage method banabo jer vitor amra
//allstudent.blade.php page ta display korabo
//ai page er vitor amra data base the student gula anbo and compact kore page er vitor pathabo

 public function allstudentpage(){

//getallstudent namer akta varible nilam, data base theke sobstudent tule anbo and getallstudent ai varible er vitor store korbo
  $getallstudent = DB::table('addstudents')->get();
                   //addstudents table theke get method er madhome sob student tule nilam and getallstudent varible er vitor store korlam. akhon $getallstudent varible ta allstudent.blade.php te pass korate hobe jate jate 
                   //allstudent.blade.php te student gula display korate pare
  return view('admin.allstudent')->with(compact('getallstudent'));
  //allstudent.blade.php page ta display koralam   and student gula getallstudent varible a store kore raksilam setao pass kore dilam jate allstudent.blade.php page a  ai $getallstudent varible ta use korte pari

  //with compact er madhome getallstudent varible ta pass koralam

 }






//studentdelete method banabo and ater vitor student delete er kaj korbo
//web.php te route er sate student_id pass koricilam, ata akhane pabo

 public function studentdelete($student_id){
                               //student_id pass koraicilam seta nilam


     DB::table('addstudents')->where('student_id',$student_id)->delete();
    //addstudent table theke j student er sate amader passkora id milbe se student ta delete hohe

       return Redirect::to('/all_student_page');

       //delete hoyer por ai page er route a niya jabe



 }



//addlibarybookpage method ta banabo er maddhome amra libarybook add korar jonno j page ta dorker setadisplay korabo


public function addlibarybookpage(){

  return view('admin.addlibarybookpage');

  //admin folder er vitor addlibarybookpage.blade.php page ta ase ata return korlam


}



//addlibarybookformaction



public function addlibarybookformaction(Request $request){


//libary book add korar jonno addlibarybookformaction method banaci er vitor amra libarybook add korar kaj korbo

 //array nilam
  $data = array();
  
  //akhane bole dilam data base book_name field er vitor amra frontend theke j book_name ta dici seta addhobe
  $data['book_name'] = $request['book_name'];
   //akhane bole dilam data base book_department field er vitor amra frontend theke j book_department ta dici seta addhobe
  $data['book_department'] = $request['book_department'];

//book image ta onno vabe inbo  



               $image=$request->file('book_image');
               //amra frontend theke j image dici seta nilam and image varible a raklam

            if($image){ //jodi image thake


               $random = Str::random(20);//random num genetate korlam length hobe 20

                $ext=strtolower($image->getClientOriginalExtension());  //getClientOriginalExtension dara image er extensation paoya jabe png,jpg etc agula // orthat image ta for format er png naki jpg naki onno
                //strtolower dara lowercase generate korlam
                $image_full_name=$random.'.'.$ext; //random number er sate image er extension add kore dilam jate image er nam ta uniq hoy
                $upload_path='image/'; //public folder er vitor image forder korci ai image folder a image gula uplode hobe
                $image_url=$upload_path.$image_full_name; // image er url hobe image/product1.png orthat image er nam er age image je folder a save hobe seta thakbe
                $success=$image->move($upload_path,$image_full_name);      

                 $data['book_image']=$image_url;
                   //database er book image field a  amader image bosbe


                 DB::table('addlibarybooks')->insert($data);
                //addlibarybooks table a book information insert hobe. insert ($data) dilam karan $data er vitor book er sob information ase.
              
                return Redirect::to('/all_libarybook_page');

               //data base save hoyer por /all_libarybook route a jabe
          

}




}


//alllibarybookpage

//alllibarybookpage method banabo jer vitor amra
//alllibarybook.blade.php page ta display korabo
//ai page er vitor amra data base the libarybook gula anbo and compact kore page er vitor pathabo

 public function alllibarybookpage(){

//getalllibarybook namer akta varible nilam, data base theke soblibarybook tule anbo and getalllibarybook ai varible er vitor store korbo
  $getalllibarybook = DB::table('addlibarybooks')->get();
                   //addlibarybooks table theke get method er madhome sob libarybook tule nilam and getalllibarybook varible er vitor store korlam. akhon $getalllibarybook varible ta alllibarybook.blade.php te pass korate hobe jate
                   //alllibarybook.blade.php te libarybook gula display korate pare
  return view('admin.alllibarybook')->with(compact('getalllibarybook'));
  //admin folder er vitor alllibarybook.blade.php page ta display koralam   and libarybook gula getalllibarybook varible a store kore raksilam setao pass kore dilam jate alllibarybook.blade.php page a  ai $getalllibarybook varible ta use korte pari

  //with compact er madhome getalllibarybook varible ta pass koralam

 }





//bookdelete






//bookdelete method banabo and ater vitor book delete er kaj korbo
//web.php te route er sate book_id pass koricilam, ata akhane pabo

 public function bookdelete($book_id){
                               //book_id pass koraicilam seta nilam


     DB::table('addlibarybooks')->where('book_id',$book_id)->delete();
    //addlibarybooks table theke j book_id er sate amader passkora bookib_id milbe se bookta ta delete hobe

       return Redirect::to('/all_libarybook_page');

       //delete hoyer por ai page er route a niya jabe



 }




//givebook

//givebook method banabo jer vitor amra
//admin folder er vitor givelibarybook.blade.php page ta display korano


public function givebook($book_id){

    $bookinfo = DB::table('addlibarybooks')->where('book_id',$book_id)->first();
    //book er information nilam

    return view('admin.givelibarybook')->with(compact('bookinfo'));



 }




//studenttakebookformaction


 public function studenttakebookformaction(Request $request,$book_id){

   $studentroll = $request->take_book_stu_roll; //input hisabe j roll ta dilam seta  $studentroll namer varible a raklem
   $studentdepartment = $request->take_book_stu_department; //input hisabe j department ta dilam seta $studentdepartment namer varible a raklam

   //akhon check korbo student ja roll r department dilo segula shotik ki na


   $check = DB::table('addstudents')   //check amra j roll r department input dilam, sete addstudents table er roll r department er sate mile ki na jodi mile tahole se boi nite parbe
            ->where('student_roll',$studentroll)
            ->where('student_department',$studentdepartment)
            ->first();

   
    $bookinfo = DB::table('addlibarybooks')->where('book_id',$book_id)->first();

    $bookname = $bookinfo->book_name;

   


   if($check){//jodi studenter roll and department tik hoy tahole  ata execute hobe
             $today_date = date('d-m-y');
            $student_id = $check->student_id;
            $studentname = $check->student_name;
            $data = array(); //array nilan
       
          $data['take_book_stu_roll'] = $request->take_book_stu_roll;
          $data['take_book_stu_department'] = $request->take_book_stu_department;
          $data['take_book_stu_bookname'] = $bookname;
          $data['take_book_stu_name'] = $studentname;
          $data['take_book_stu_id'] = $student_id;
          $data['take_book_id'] = $book_id;
          $data['take_book_date'] = $request->take_book_date;
          $data['return_book_date'] = $request->return_book_date;

          $data['student_return_date'] = 'Pending';
        

          $data['take_book_status'] = 1;

        DB::table('takelibarybooks')->insert($data);
           
              
        return Redirect::to('/all_pendingbook_page');



   }else{//jodi studenter roll and department tik nae hoy tahole  ata execute hobe


   //return "hello";

       // Session::put('error_maeesge','Student Information Not Right');

        return Redirect::to('/give_book/'.$book_id);

   }



 }



//allpendingbookpage

//allpendingbookpage method banabo jer vitor amra
//allpendingbook.blade.php page ta display korabo
//ai page er vitor amra data base er pendingbook gula anbo and compact kore page er vitor pathabo

public function allpendingbookpage(){

  $allpedingbooklist = DB::table('takelibarybooks')->where('take_book_status',1)->get();

                   //database er takelibarybooks table er take_book_status  1 hone oi sob book pending , oi sob pending book nilam and $allpedingbooklist valible a store korlam


return view('admin.allpendingbook')->with(compact('allpedingbooklist'));


}



//returnbook

public function returnbook($take_id){


$today_date = date('Y-m-d');
DB::table('takelibarybooks')->where('take_id',$take_id)->update(['take_book_status' => 0,'student_return_date'=> $today_date]);

//->update('take_book_status',0);
 return Redirect::to('/successfull_return_book_page');

}


//successfullreturnbookpage


public function successfullreturnbookpage(){

    $allsuccessreturnbooklist = DB::table('takelibarybooks')->where('take_book_status',0)->get();

    return view('admin.allsuccessfullreturnbook')->with(compact('allsuccessreturnbooklist'));

}




//today

public function today(){


//return  $today_date = date('d-m-y');

  return  $today_date = date('Y-m-d');



}




public function adminlogout(){


 Session::forget('admin_name');
 return Redirect::to('/');

}





}


