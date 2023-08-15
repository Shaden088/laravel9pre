<?php
use App\Http\Controllers\Home;
use App\Http\Controllers\MotoController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;


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


//creat my file

Route::get('/',function(){

return view('pages.cv');});


Route::get('/d',function(){

    $name = request('Name');
    $email = request('Email');
    $subject = request('Subject');
    echo $name. "<br>" .$email .$subject.view('pages.contact');
    });
  
 Route::get('/{page}', function($page){
    if($page==1){
        return view('pages.cv');
}

elseif($page==2){
    return view('pages.contact');
}
});


Route::get('/azo', [Home::class,'index'] );
  

/*

Route::get('/',function(){

    return view('welcome');});*/
    

Route::resource("/students", StudentController::class,(array)'index');