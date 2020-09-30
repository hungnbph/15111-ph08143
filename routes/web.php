<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/students', function(){
    //sử dụng query builder
    //lấy mảng students
   $student = DB::table('students')->get();
   // lấy riêng 1 studen
//    $student = DB::table('students')->where('id','=', 1)->first(); 
//    $student = DB::table('students')->where('id','=', 1)->first();



//truyên vào mảng [tên biến nhận được => giá trị]
    return view('students.detail', ['studentValue'=>$student]);

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


Route::get('/student-list', function () {
    // Truy van lay danh sach student bang query builder
    $students = DB::table('students')->orderBy('id', 'desc')->get();

    return view('students.list', [
        'students' => $students,
        'error' => null,
    ]);
})->name('student-list');

Route::get('/login', function() {
    return view('login');
})->name('get-login');


Route::post('/post-login', function(Request $request) {
    // su dung $request->all() hoac $request->input name
    $username = $request->username;


    // Thuc hien truy van theo gia tri vua gui len
    $student = DB::table('students')
        ->where('name', 'like', "%$username%")
        ->first();

        if ($student) {
            return redirect()->route('student-list');
        }
        // Neu khong thi quay lai man login
        return redirect()->route('get-login');
    
    })->name('post-login');

