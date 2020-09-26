<?php

use Illuminate\Support\Facades\Route;
use DB;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function(){
    //sử dụng query builder
   return DB::table('students')->where('id','=', 1)->get();

});
// giá trị truyền vào url sẽ tương ứng vị trí tham số của function
Route::get('/student/{id}', function ($id, $number){
    dd('giá trị truyền vào trên url:'.$id . ' ' . $number );
});

Route::get('/students/detail', function(){
    return view('students/detail');
});
//cách 2
Route::view('/students/detail-2', 'students.detail');
