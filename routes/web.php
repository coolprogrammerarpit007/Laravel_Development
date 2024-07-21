<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ContactController;
use App\Models\Customers;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo',function(){
//     echo "Hello Laravel, Laravel is so cool";
// });

// Route::get('/new/',function(){
//     return view('demo');
// });
// Route::get('/new/{name}',function($name){
//     echo $name;
//     return view('demo');
// });
// Route::get('/new/{name}/{id?}',function($name,$id = null){
//     echo $name;
//     // echo $id;
//     return view('demo');
// });
// Route::get('/new/{name}/{id?}',function($name,$id = null){
//     $data = compact("name","id");
//     // print_r($data);
//     // echo $name;
//     return view('demo')->with($data); // with() is used to give data of url to blade.php file
// });
// Route::post('/test',function(){
//     echo "Testing the data";
// });

// Route::get('/home/{name?}',function($name = null){
//     $data = compact('name');
//     return view('home')->with($data);
// });

// Route::get('/first',function(){
//     return view('first');
// });
// Route::get('/about',function(){
//     return view('about');
// });
// Route::get('/course',function(){
//     return view('courses');
// });


// Now to call a controller through routes

Route::get('/',[DemoController::class,'index']);
Route::get('/about',[DemoController::class,'about']);
Route::get('/course',SingleActionController::class);
Route::resource('/photo',PhotoController::class);
Route::get('/register',[RegistrationController::class,'form']);
Route::post('/register',[RegistrationController::class,'register']);
Route::get('/customer',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customer/views',[CustomerController::class,'view']);
Route::get('/contact',[ContactController::class,'index']);

// Route::get('/customer',function(){
//     $customers = Customers::all();
//     echo "<pre>";
//         print_r($customers->toArray());

// });