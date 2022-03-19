<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
// Su dung Request $request trong callback cua route

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
// Thu muc view: resources/views/"welcome".blade.php
Route::get('/', function () {
    $students = [
        [
            'name' => 'Tuannda3',
            'age' => 20,
            'class' => 'WE16201',
            'id' => '1',
            'avatar' => "https://thelifetank.com/wp-content/uploads/2018/08/avatar-default-icon.png"
        ],
        [
            'name' => 'Tuannda312',
            'age' => 20,
            'class' => 'WE16201',
            'id' => '2',
            'avatar' => "https://thelifetank.com/wp-content/uploads/2018/08/avatar-default-icon.png"
        ],
    ];
    // dd($students);
    return view('welcome', ['student' => $students]);
});

// Thu muc view: resources/views/"auth/login".blade.php => auth.login
Route::get('/login', function () {
    // dd('login view');
    $email = 'tuannda3@fe.edu.vn';
    $password = '123456';
    // return view('auth.login')->with('emaill', $email);
    // view(ten view, mang gia tri truyen sang view)
    return view('auth.login', [
        'email' => $email,
        'password' => $password
    ]);
});

Route::get('/home', function () {
    $students = [
        [
            'name' => 'Tuannda3',
            'age' => 20,
            'class' => 'WE16201',
            'id' => '1',
            'avatar' => "https://thelifetank.com/wp-content/uploads/2018/08/avatar-default-icon.png"
        ],
        [
            'name' => 'Tuannda312',
            'age' => 20,
            'class' => 'WE16201',
            'id' => '2',
            'avatar' => "https://thelifetank.com/wp-content/uploads/2018/08/avatar-default-icon.png"
        ],
    ];
    return view('home', ['student' => $students]);
});

// Route kem query string va params
// Voi tham so truyen vao url thi function se nhan 1 tham so tuong ung
Route::get('/users/{userId}/{username?}', function (
    Request $request,
    $userId,
    $userName = 'profile'
) {
    dd($userId, $userName, $request->all());
});

Route::get('/user/{userId}/{username?}', function (
   // name, height, weight, age, gender, avatar.
    Request $request,
    $userId,
    $userName = 'profile'
) {
    $people = [
        [
            'name' => 'duonghv',
            'height' => '170',
            'weight' =>'55',
            'age' => '18',
            'gender' => 'male',
            'avatar' => 'https://portal.staralliance.com/imagelibrary/aux-pictures/prototype-images/avatar-default.png/@@images/image.png',
        ],
        [
            'name' => 'tuhv',
            'height' => '170',
            'weight' =>'55',
            'age' => '18',
            'gender' => 'male',
            'avatar' => 'https://portal.staralliance.com/imagelibrary/aux-pictures/prototype-images/avatar-default.png/@@images/image.png',
        ],
        [
            'name' => 'vanld',
            'height' => '170',
            'weight' =>'55',
            'age' => '18',
            'gender' => 'male',
            'avatar' => 'https://portal.staralliance.com/imagelibrary/aux-pictures/prototype-images/avatar-default.png/@@images/image.png',
        ]
    ];
    return view('home',['userId' => $userId,'userName'=>$userName,'request' => $request,'people' => $people]);
});
Route::get('/category',[CategoryController::class,'index']);