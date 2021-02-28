<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conttoller\AdminController;
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

//Admin logout....
Route::get('logout','AdminController@logout');

//Student Logout.........
Route::get('student_logout','StudentController@studentlogout');

//student login.......
Route::get('/', function () {
    return view('student.student_login');
});
Route::post('student_login','StudentController@studentlogin');
Route::get('student_dashboard','StudentController@studentdashboard')->name('student_dashboard');
Route::get('student_profile','StudentController@studentprofile');
Route::get('student_setting','StudentController@studentsetting');
Route::post('student_own_update','StudentController@studentupdate');

//admin login.........................
Route::get('/backend', function () {
    return view('admin.admin_login');
});
//Admin.......
Route::post('admin_login','AdminController@login');
Route::get('admin_dashboard','AdminController@dashboard');
Route::get('view_profile','AdminController@view');
Route::get('setting','AdminController@setting');

//Student........
Route::get('addstudent','AddstudentController@addstudent');
Route::post('save_student','AddstudentController@savestudent');
Route::get('student_delete/{id}','AllstudentController@deletestudent');
Route::get('student_view/{id}','AllstudentController@viewstudent');
Route::get('student_edit/{id}','AllstudentController@editstudent');
Route::post('student_update/{id}','AllstudentController@updatestudent');

//AllStudent......
Route::get('allstudent','AllstudentController@allstudent')->name('allstudent');

//TutionFee....
Route::get('tution_fee','TutionController@tution');

//Teacher.....
Route::get('all_teacher','TeacherController@allteacher');
Route::get('add_teacher','TeacherController@addteacher');
Route::post('save_teacher','TeacherController@saveteacher');

//Course.....
Route::get('cse','CseController@cse');
Route::get('eee','EEEController@eee');
Route::get('it','ITController@it');
Route::get('textile','TextileController@textile');
Route::get('bba','BBAController@bba');
Route::get('mba','MBAController@mba');

