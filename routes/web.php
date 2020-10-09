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

Route::get('all-logs',function (){
    $logs =  \Spatie\Activitylog\Models\Activity::paginate(8);
    return view('all_logs',compact('logs'));
});


Route::get('contact',function (){
   return view('contact');
});

Route::get('users-list',function (){
    $usersList = 'usersList';
   return view($usersList);
});

