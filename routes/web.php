<?php
Auth::routes();

//user routes

Route::get('/room', function () {
    return view('rooms');
})->middleware('user');

Route::get('/services', function () {
    return view('services');
})->middleware('user');

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::get('/showcity/{dist}','HomeController@city');


Route::post('/searchresult','HostelController@search');

Route::get('hostels/{id}','HostelController@details'); //details-- for disp hostel detail with id


//admin routes
Route::get('adminindex', 'HomeController@adminindex')->middleware('admin');

Route::get('/hosteladd', 'HostelController@show')->middleware('admin');

Route::post('/inserthostel','HostelController@store')->middleware('admin');

Route::get('/userlist','HomeController@show')->middleware('admin');

Route::get('/hostelist','HostelController@hostelist')->middleware('admin');

Route::get('deletehostel/{id}','HostelController@destroy')->middleware('admin');

Route::get('edithostel/{id}','HostelController@edit')->middleware('admin');

Route::post('/updatehostel','HostelController@update')->middleware('admin');