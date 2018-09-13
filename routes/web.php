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

Route::get('/', function () {
	if (Auth::check()){
		return redirect('/home');
	}else{
	    return view('auth.login');	
	}
});

Auth::routes();
Route::get('/ip2_1', 'HomeController@ip2_1');
Route::get('/ip2_2', 'HomeController@ip2_2');
Route::get('/ip2_3', 'HomeController@ip2_3');
Route::get('/ip2_4', 'HomeController@ip2_4');
Route::get('/op2_rb', 'HomeController@op2_rb');
Route::get('/op2_ib', 'HomeController@op2_ib');
Route::get('/op1_sched', 'HomeController@op1_sched');
Route::get('/op1_summ', 'HomeController@op1_summ');
Route::get('/company_profile', 'HomeController@profile')->name('profile_url');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/examiner', 'HomeController@examiner')->name('examiner');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'HomeController@forms');
Route::get('/annuallist', 'HomeController@annuallist');
Route::get('/quarterlist', 'HomeController@quarterlist');
Route::get('/op1a_sched', 'HomeController@op1a_sched');
Route::get('/op1a_summ', 'HomeController@op1a_summ');

//wala pang laman
Route::get('/user_dashboard', 'HomeController@user_d')->name('user_dashboard');
