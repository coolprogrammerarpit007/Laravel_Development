<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',function(){
    echo "Hello Laravel, Laravel is so cool";
});

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
Route::get('/new/{name}/{id?}',function($name,$id = null){
    $data = compact("name","id");
    // print_r($data);
    // echo $name;
    return view('demo')->with($data); // with() is used to give data of url to blade.php file
});
// Route::post('/test',function(){
//     echo "Testing the data";
// });