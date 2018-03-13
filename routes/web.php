<?php

Route::group( ['middleware' => ['auth']], function() {

	Route::get('/', 'HomeController@index');

	Route::get('/home', function () {
	    return redirect('/');
	});

	Route::get('/course-info', function () {
	    return view('/course-info');
	});

	Route::get('/students/register/profile', 'StudentRegPersonalInfoController@createPersonalInfo');
	Route::put('/students/register/profile', 'StudentRegPersonalInfoController@postPersonalInfo');

	Route::get('/students/register/contact', 'StudentRegContactInfoController@createContactInfo');
	Route::put('/students/register/contact', 'StudentRegContactInfoController@postContactInfo');

	Route::get('/students/register/course-selection', 'StudentRegCourseInfoController@createCourseInfo');
	Route::put('/students/register/course-selection', 'StudentRegCourseInfoController@postCourseInfo');

	Route::get('/students/register/admission-requirement', 'StudentRegAdmissionReqController@createAdmissionRequirement');
	Route::put('/students/register/admission-requirement', 'StudentRegAdmissionReqController@postAdmissionRequirement');

	Route::get('/students/register/upload', 'StudentRegUploadController@createUpload');
	Route::put('/students/register/upload', 'StudentRegUploadController@postUpload');

	Route::get('/students/register/finish', 'StudentRegFinishController@createFinishReg');
	Route::put('/students/register/finish', 'StudentRegFinishController@postFinishReg');

	Route::get('/students/register/congratulation', 'StudentRegCongratulationController@regCongratulation');
	Route::get('/students/register/not-found', 'StudentRegCongratulationController@regNotFound');

	//Password
	Route::get('/change-password', 'UserController@changePassword');
	Route::post('/change-password', 'UserController@postChangePassword');

	//Student Courses
	Route::post('/studuents/register/register-course', 'StudentCourseController@store');

	Route::group( ['middleware' => ['admin']], function() {

		//Admin Student
		Route::get('/students', 'StudentController@index');
		Route::get('/students/{uid}', 'StudentController@show');
		Route::get('/students/{uid}/edit', 'StudentController@edit');
		Route::put('/students/{uid}', 'StudentController@update');
		Route::delete('/students/{uid}', 'StudentController@destory');

		//Admin Student Courses
		Route::delete('/students/{uid}/courses', 'StudentCourseController@destroy');

		//Admin User
		Route::get('/users/create', 'UserController@create');
		Route::post('/users/create', 'UserController@store');
		Route::get('/users', 'UserController@index');
		Route::get('/users/{uid}/edit', 'UserController@edit');
		Route::put('/users/{uid}', 'UserController@update');
		Route::delete('/users/{uid}', 'UserController@deleteUser');

		//Delete a student's login details
		Route::delete('/users/{uid}/student', 'UserController@deleteStudent');
	});

});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
