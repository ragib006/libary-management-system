<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
   // return view('welcome');
//});





//LOGIN PAGE SHOW ROUTE//
//login page display korar kaj ai route korbe


// route er nam dilam / karon localhost:8000/ dile ai route a hit korbe and amader admin login pannel aniya jabe
//ai route er kaj gula korbo AdminController er vitor  and adminloginpageshow function er vitor
Route::get('/', [AdminController::class, 'adminloginpageshow']);




//ADMIN DASHBOARD SHOW ROUTE//
//admin dashboard display korar kaj ai route korbe
//route er nam admin_dashboard admin login hoyerpor  ai route a jabe akhane admin dashboard ase
Route::get('/admin_dashboard', [AdminController::class, 'admindashboard']);





//ADMIN LOGIN FROM ACTION ROUTE //
//admin er email password shotik ki na ta check korar kaj ai route korbe
//adminfolder er vitor adminloginpage.blade.php te from er vitor adminlogin_form_action ai route ta dici ai route er madhome login from kaj korbe. ai adminlogin_form_action route ta akhane banabo
//jokhon admin email and password diye login korbe tokhon ai route kaj korke
//route er nam adminlogin_form_action
//jahatu from submit er kaj korbo tai ata post route

Route::post('/adminlogin_form_action', [AdminController::class, 'adminloginformaction']);



//ADD STUDENT PAGE SHOW ROUTE//
//add_student_page display korar kaj ai route korbe
//layout er vitor sidebar.blade.php sidebar a jekhane add student likha ase sekhane url hisab a add_student_page  dici akhon add_student_page route ta akhane banabo
// ai add_student_page route dara amra student add korar jonno j page ta lagbe seta display korabo
Route::get('/add_student_page', [AdminController::class, 'addstudentpage']);




//ADD STUDENT FROM ACTION ROUTE
//student  data base a save hoyer kaj ai route korbe
//adminfolder er vitor addstudent.blade.php te from er vitor addstudent_form_action ai route ta dici ai route er madhome student database a add hobe. tahole ai addstudent_form_action route ta akhane  banai

//jokhon amra sidebar a addstudent likha te a click korbo tokhon ai route dara addstudent.blade.php page ta display hobe and amra akhan theke student add korte parbo

//jokhon amra student er sokon information diya submit button a click korbo tokhon student er information data base a add hobe

//jahatu from submit er kaj korbo tai ata post route

Route::post('/addstudent_form_action', [AdminController::class, 'addstudentformaction']);




//ALLSTUDENT PAGE SHOW ROUTE


//layout folder er vitor sidebar.blade.php sidebar a jekhane all student likha ase sekhane url hisab a all_student_page  dici akhon all_student_page route ta akhane banabo
//jokhon amra sidebar a allstudent likha te a click korbo tokhon ai route dara allstudent.blade.php page ta display hobe jekhabe sobgula student thakbe 

//ai all_student_page route dara amra student gula display korabo

Route::get('/all_student_page', [AdminController::class, 'allstudentpage']);




//STUDENT DELETE ROUTE
//student delete hoyer kaj ai route korbe

//aber amra student detete korko, admin folder er vitor j  allstudent.blade.php file ta ase akhane sobgula student display korci.
//akhane delete button er vito url dici  student_delete/{student_id} namer // jokhon delete button a click korbo tokhon student delete hobe
//akhon ai route ta amader banate hobe jokhon button a click korbo tokhon student delete hobe

Route::get('/student_delete/{student_id}', [AdminController::class, 'studentdelete']);
          //route er nam   //ata studenter id j student k delete korbo ter id



//ADD LIBARYBOOK PAGE SHOW ROUTE

//layout folder er vitor sidebar.blade.php sidebar a jekhane add libary book likha ase sekhane url hisab a add_libarybook_page  dici akhon add_libary_page route ta akhane banabo
//add_libarybook_page route dara amra libarybook add korar jonno j page ta lagbe seta display korabo




Route::get('/add_libarybook_page', [AdminController::class, 'addlibarybookpage']);






//ADD LIBARYBOOK FROM ACTION ROUTE
//libary book data base a save hoyer kaj ai route korbe
//adminfolder er vitor addlibarybookpage.blade.php te from er vitor addlibarybook_form_action ai route ta dici ai route er madhome libary book database a add hobe. tahole ai addlibarybook_form_action route ta akhane  banai

//jokhon amra sidebar a addlibarybok likha te a click korbo tokhon ai route dara addlibarybookpage.blade.php page ta display hobe and amra akhan theke libarybook add korte parbo

//jokhon amra libary book er information diya submit button a click korbo tokhon libary book er information data base a add hobe

//jahatu from submit er kaj korbo tai ata post route



Route::post('/addlibarybook_form_action', [AdminController::class, 'addlibarybookformaction']);





//All LIBARYBOOK PAGE SHOW


//layout folder er vitor sidebar.blade.php sidebar a jekhane all libary book likha ase sekhane url hisab a all_libarybook_page  dici akhon all_libarybook_page route ta akhane banabo
//jokhon amra sidebar a alllibarybook likha te a click korbo tokhon ai route dara alllibarybook.blade.php page ta display hobe jekhabe sobgula libarybook thakbe


Route::get('/all_libarybook_page', [AdminController::class, 'alllibarybookpage']);


//BOOK DELETE ROUTE
//BOOK delete hoyer kaj ai route korbe

//aber amra BOOK detete korko, admin folder er vitor j  alllibarybook.blade.php file ta ase akhane sobgula book display korci.
//akhane delete button er vito url dici  book_delete/{book_id} namer sate book_id pass koraici// jokhon delete button a click korbo tokhon book delete hobe
//akhon book_delete/{book_id} ai route ta amader banate hobe jokhon button a click korbo tokhon book delete hobe

Route::get('/book_delete/{book_id}', [AdminController::class, 'bookdelete']);
          //route er nam   //ata book id j book ta k delete korbo ter id



//GIVEBOOK ROUTE
//ai route er kaj holo admin folder er vitor givelibarybook.blade.php page ta display kora
//JE student boi nibe se student er roll,department and kobe boi joma dibe a gula add korar page ata

//give_book

Route::get('/give_book/{book_id}', [AdminController::class, 'givebook']);


//student_take_book_form_action
//ai route er kaj holo alllibarybook.blade.php te jokhon kau click korlo tokhon oi book j student nibe ter information dite hobe,  ai roue er kaj holo j student book nibe ter information gula data base a save kora

Route::post('/student_take_book_form_action/{book_id}', [AdminController::class, 'studenttakebookformaction']);



//ALL PENDING BOOK PAGE SHOW
//all_pendingbook_page




//layout folder er vitor sidebar.blade.php sidebar a jekhane all pending book likha ase sekhane url hisab a all_pendingbook_page  dici akhon all_pendingbook_page route ta akhane banabo
//jokhon amra sidebar a allpendingbook likha te a click korbo tokhon ai route dara allpendingbook.blade.php page ta display hobe jekhane j sob student libary book niya gese tader information thakbe


Route::get('/all_pendingbook_page', [AdminController::class, 'allpendingbookpage']);



//return_book

Route::get('/return_book/{take_id}', [AdminController::class, 'returnbook']);


//

Route::get('/successfull_return_book_page', [AdminController::class, 'successfullreturnbookpage']);

//admin_logout


Route::get('/admin_logout', [AdminController::class, 'adminlogout']);



//Route::get('/today', [AdminController::class, 'today']);