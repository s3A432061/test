<?php

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


/*

Route::get('/','HomeController@index');



Route::group(['prefix'=>'student'],function(){

    Route::get('{student_no}',[
        'as'=>'student',
        'users'=>'StudentController@getStudentData'
    ]);

    Route::get('{student_no}/score/{subject?}',[
        'as'=>'student.score',
        'users'=>'StudentController@getStudentScore'
    ])->where(['subject'=>'(chinese | english | math)']);

});

Route::group(['namespace'=>'Cool'],function(){

Route::get('cool','Cool\TestController@index');
});
*/

Route::get('/',function(){
    return view('welcome');
});

Route::get('/board','BoardController@getIndex');