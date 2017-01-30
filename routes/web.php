<?php
Route::get('/', function () {
    return view('login.index');
});

Route::post('loginme', 'LoginController@index');
Route::get('logout-admin', 'LoginController@logout_admin');
Route::get('logout-employee', 'LoginController@logout_employee');



Route::group(['middleware' => 'auth.admin'], function () {

Route::resource('designation', 'DesignationController');
Route::resource('payitem', 'PayitemController');
Route::resource('paygrade', 'PaygradeController');
Route::post('paygrade/{id}/salary', 'SalaryController@store');
Route::get('paygrade/{id}/salary', 'SalaryController@edit');
Route::get('paygrade/{id}/salary/basic/{basic}', 'SalaryController@show');


Route::get('/salary', 'SalaryController@index');
Route::get('payitem/{id}/modal', 'PayitemController@modal');
Route::get('/abc', 'SearchController@search');
Route::get('/active', 'SearchController@active');
Route::get('/activated', 'SearchController@activated');
Route::get('/empedit', 'SearchController@search');
Route::get('/deactivate', 'SearchController@deactivate');
Route::resource('register', 'EmployeeController');
Route::get('register/{id}/view/{basic}/{paygrade}', 'EmployeeController@show');
Route::get('register/{id}/edit', 'EmployeeController@employee_edit');


Route::resource('payment', 'PaymentController');
Route::get('payment/create/{employee_id?}/{paygrade_id?}', 'PaymentController@create');
Route::get('payment/show', 'PaymentController@show');
Route::post('payment/getpayment', 'PaymentController@edit');
Route::post('searchhistory', 'PaymentController@search');
Route::get('searchhistory/{id}', 'PaymentController@search_by_id_history');
Route::post('searchpaymentbydate', 'PaymentController@searchpayment');
Route::get('paygrade/{id}/deactive', 'PaygradeController@deactive');
Route::get('paygrade/{id}/active', 'PaygradeController@active');
Route::get('salaryshow', 'PaygradeController@salary');
Route::get('deactivepaygrade', 'PaygradeController@showdeactive');
Route::get('invoice', 'PaymentController@invoice');


Route::resource('manageleave', 'LeaveController');
Route::get('leavedetails/{id}', 'LeaveController@leaveinfo');
Route::post('acceptleave', 'LeaveController@leaveaccept');
Route::post('rejectleave', 'LeaveController@leavereject');
Route::get('leavehistory', 'LeaveController@leavehistory');
Route::get('leavehistorydetails/leaveid/{id}/employeeid/{eid}', 'LeaveController@leavehistorydetails');
Route::post('employeesearch', 'EmployeeController@search');
Route::get('register/{id}/view/{paygrade}', 'EmployeeController@searchshow');
Route::post('add_new_admin', 'EmployeeController@add_admin');
Route::post('leave_search', 'EmployeeController@leavesearch');


});



Route::group(['middleware' => 'auth.employee'], function () {


Route::post('attendance', 'EmployeeprofileController@timesheet');
Route::get('checkin/{id}', 'EmployeeprofileController@checkin');
Route::get('checkin', 'EmployeeprofileController@checkin');
Route::get('salaryhistory', 'EmployeeprofileController@salaryhistory');
Route::resource('leave/store', 'EmployeeprofileController');
Route::get('paymenthistory', 'EmployeeprofileController@paymenthistory');
Route::get('profile', 'EmployeeprofileController@show');
Route::get('leave', 'EmployeeprofileController@leave');
Route::get('leavestatus', 'EmployeeprofileController@leavestatus');
Route::get('salaryinfo', 'EmployeeprofileController@salaryinfo');
Route::get('profile/{id}', 'EmployeeprofileController@edit');
Route::resource('empprofileupdate', 'EmployeeprofileController');

	  
});