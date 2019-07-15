<?php

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){

	Route::get('users', 'UserController@index')
	    ->name('users.index')->middleware('permission:users.index');

	Route::get('users/datatable', 'UserController@datatable')
	    ->name('users.datatable')->middleware('permission:users.index');

	Route::post('users/store', 'UserController@store')
		->name('users.store')->middleware('permission:users.create');

	Route::get('users/create', 'UserController@create')
		->name('users.create')->middleware('permission:users.create');

	Route::put('users/{user}', 'UserController@update')
		->name('users.update')->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')
		->name('users.show')->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')
		->name('users.destroy')->middleware('permission:users.destroy');

	Route::get('users/edit/{user}', 'UserController@edit')
		->name('users.edit')->middleware('permission:users.edit');

	Route::get('users/delete/{user}', 'UserController@delete')
		->name('users.delete')->middleware('permission:users.destroy');

	Route::get('roles', 'RoleController@index')
		->name('roles.index')->middleware('permission:roles.index');

	Route::get('roles/datatable', 'RoleController@datatable')
	    ->name('roles.datatable')->middleware('permission:roles.index');

	Route::post('roles/store', 'RoleController@store')
		->name('roles.store')->middleware('permission:roles.create');

	Route::get('roles/create', 'RoleController@create')
		->name('roles.create')->middleware('permission:roles.create');

	Route::put('roles/{role}', 'RoleController@update')
		->name('roles.update')->middleware('permission:roles.edit');

	Route::get('roles/{role}', 'RoleController@show')
		->name('roles.show')->middleware('permission:roles.show');

	Route::delete('roles/{role}', 'RoleController@destroy')
		->name('roles.destroy')->middleware('permission:roles.destroy');

	Route::get('roles/edit/{role}', 'RoleController@edit')
		->name('roles.edit')->middleware('permission:roles.edit');

	Route::get('roles/delete/{role}', 'RoleController@delete')
		->name('roles.delete')->middleware('permission:roles.destroy');
});